<?php
include_once 'conn.php';

function queryGeneral($dType, $sql, $values){
    $conn = dbConn();
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($dType, ...$values);
    return $stmt->execute()?true:false;
}

function querySelect($dType, $sql, $values){
   $conn = dbConn();
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($dType, ...$values);
    $result = $stmt->execute();
    $stmt->store_result();
    return $result ? $stmt:false;
    
}

function readMsgs(){
        $toggleReadMsg = 'UPDATE messages SET status = ? WHERE status = ?';
           return queryGeneral('ii', $toggleReadMsg, [0,1]);
    }
       


function pushFile($file, $permFolderLoc, $sql=null, $values=null){
        $sql = $sql??'INSERT INTO gallery(photoID) VALUES (?)';
        $photoID = uniqid();
        $fileName = explode('.', $file['name']);
        $fileExt = end($fileName);
        $extFound = in_array(strtoupper($fileExt), ['JPEG', 'PNG', 'JPG', 'IMG']);
        if(!$extFound)
            return false;
        $fileName = $photoID.'.'.$fileExt;
        $tmpLoc = $file['tmp_name'];
        $error = $file['error'];
        if($error)
            return false;
        $permLoc = $permFolderLoc.'/'.$fileName;
        if(move_uploaded_file($tmpLoc, $permLoc))
            return $values ? queryGeneral(str_repeat('s',count($values)+1), $sql, [$fileName, ...$values]):queryGeneral('s', $sql, [$fileName]);
        return false;     
}

function photoCount(){
    $countPhotos = 'SELECT COUNT(*) FROM gallery WHERE ?';
    $stmt = querySelect('i', $countPhotos, [1]);
    if($stmt){
        $stmt->bind_result($photoNo);
        $stmt->fetch();
        return $photoNo;
    }
        return 0;
}

function displayPhotos($imgFolder){
    $fetchPhotos = 'SELECT * FROM gallery where ?';
    $stmt = querySelect('i', $fetchPhotos, [1]);
    if($stmt){
        $stmt->bind_result($photo);
        $album = null;
        while($stmt->fetch())
            $album .= "<a class='col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block' data-aos='fade-up' data-aos-delay='100' href=$imgFolder/$photo data-fancybox='gal'>"."<img src=$imgFolder/$photo alt='Image' class= 'img-fluid' width='910px' height='607'>"."</a>";
    }   
        return $album;
}

function adminPhotos($imgFolder){
    $fetchPhotos = 'SELECT * FROM gallery where ?';
    $stmt = querySelect('i', $fetchPhotos, [1]);
    $album = null;
    if($stmt){
        $stmt->bind_result($photo);
        $i=0;
        $album = "<tr>";
        while($stmt->fetch()){
            
            $album .= "<td>";
            $album .= "<input type='checkbox' name='adminPhotos[]'/ style='margin-right: 5px;' id='$photo' value='$photo'>"; 
            $album .= "<label for='$photo'><img src='$imgFolder/$photo' alt='Image' class= 'img-fluid' width='182px' height='121.5px'></label></td>";
             $i++;
            if($i%5==0){
                $album .= "</tr>";
                $album .= "<tr>";
            }
           
        }
        $album .= "</tr>";
        
    }   
        return $album;
}

function getDelSql($count, $sql){
    $i = 0;
    $count--;
    while($count > $i){
        $sql .= ',?';
        $i++;
    }
        
    return $sql.')';
}

function delStuff($dType, $sql, $values){
    $sql = getDelSql(count($values), $sql);
    return queryGeneral($dType, $sql, $values);
}

  

function countUnrdMsgs(){
    $countUnrdMsgs = 'SELECT COUNT(*) FROM messages WHERE status = ?';
    $stmt = querySelect('i', $countUnrdMsgs, [1]);
    $stmt->bind_result($UnrdMsgsNo);
    $stmt->fetch();
    return $UnrdMsgsNo ? $UnrdMsgsNo:0;
   
}

function countFaqs(){
    $countFaqs = 'SELECT COUNT(*) FROM faqs WHERE ?';
    $stmt = querySelect('i', $countFaqs, [1]);
    $stmt->bind_result($faqsNo);
    $stmt->fetch();
    return $faqsNo ?  $faqsNo:0;
    
    
}



function msgs(){
    
    $fetchMsgs = 'SELECT * FROM messages WHERE ? ORDER BY msgDate DESC';
    $stmt = querySelect('i', $fetchMsgs, [1]);
    $message = null; 
    if($stmt){
    $stmt->bind_result($mid, $fname, $lname, $email, $subject, $content, $msgDate, $status); 
    While($stmt->fetch()){
        $color = $status ? 'red':'';
        $message .=  "<tr style=color:$color;>";
        $message .= "<td><input type='checkbox' name='msgs[]' value='$mid' form='deleteMsgs'/></td>";
        $message .= "<td>".date('jS M, Y g:iA', strtotime($msgDate))."</td>";
        $message .= "<td>".htmlentities($lname)." ".htmlentities($fname)."</td>";
        $message .= "<td>".htmlentities($email)."</td>";
        $message .= "<td><strong>".htmlentities($subject)."</strong></td>";
        $message .= "<td><pre style='font-family: arial,sans-serif;'>".htmlentities($content)."</pre></td>";
        $message .= "</tr>";
   }
       
  }
     return $message;
}

function adminFaqs(){
    $fetchFaqs = "SELECT faqs.fid, faqs.askerName, faqs.question, faqs.answer, CONCAT(users.lname,' ', users.fname) As name FROM faqs, users WHERE faqs.ansby = users.uid AND ?";
    $stmt = querySelect('i', $fetchFaqs, [1]);
    $faqs = null;
           if($stmt && $stmt->num_rows > 0){
                $stmt->bind_result($fid, $askerName, $question, $answer, $ansby);
                While($stmt->fetch()){
                    $faqs .= "<tr>";
                    $faqs .= "<td><input type='checkbox' name='faqs[]' value='$fid' form='deleteFaqs'/></td>";
                    $faqs .= "<td>".htmlentities($askerName)."</td>";
                    $faqs .= "<td>".htmlentities($question)."</td>";
                    $faqs .= "<td>".htmlentities($answer)."</td>";
                    $faqs .= "<td>".htmlentities($ansby)."</td>";
           }     
     } 
    return $faqs;
}

function visitorFaqs(){
    $fetchFaqs = "SELECT faqs.fid, faqs.question, faqs.answer FROM faqs WHERE ?";
    $stmt = querySelect('i', $fetchFaqs, [1]);
    $faqs = null;
           if($stmt && $stmt->num_rows > 0){
                $stmt->bind_result($fid, $question, $answer);
                While($stmt->fetch()){
                    $faqs .= "<p><button class='jay-btn' type='button' data-toggle='collapse' data-target='#p$fid' aria-expanded='false' aria-controls='collapseExample'>
                   $question
                </button>
                </p>
              <div class='collapse' id='p$fid'>
                <div class='card card-body'>
                  $answer
                </div>
              </div>";
           } 
     }
            return $faqs;
}


function addFaq($askerName, $question, $answer, $ansby){
        $addFaq = 'INSERT INTO faqs(askerName, question, answer, ansby) VALUES(?,?,?,?)';
        $stmt = queryGeneral('sssi', $addFaq, [$askerName, $question, $answer, $ansby]);
        return $stmt;
}

function adminTests(){
    $sql = 'SELECT * FROM testimonials WHERE ?';
    $stmt = querySelect('i', $sql, [1]);
    $testimonials = null;
    if($stmt && $stmt->num_rows > 0){ 
    $stmt->bind_result($tid, $name, $content);
    while($stmt->fetch()){
        $testimonials .=  "<tr>";
        $testimonials .=  "<td><input type='checkbox' name='tests[]' value='$tid' form='deleteTests'/></td>";
        $testimonials .=  "<td>".htmlentities($name)."</td>";
        $testimonials .=  "<td style='max-width: 200px;'>".htmlentities($content)."</td>";
        $testimonials .=  "<td>"."<label for='$tid'><img src='../images/img/$tid' alt='Image' class= 'img-fluid' width='45' height='30px'></label></td>";
        }
    }
    return $testimonials;
}

function visitorTests(){
     $sql = 'SELECT * FROM testimonials WHERE ?';
    $stmt = querySelect('i', $sql, [1]);
    $testimonials = null;
    if($stmt && $stmt->num_rows > 0){ 
    $stmt->bind_result($tid, $name, $content);
    while($stmt->fetch()){
        $testimonials .= "<div><div class='block-testimony-1 text-center'>                
                <blockquote class='mb-4'>
                  <p>&ldquo;".htmlentities($content)."&rdquo;</p>
                </blockquote>
                <figure>
                  <img src='images/img/$tid' alt='Image' class='img-fluid rounded-circle mx-auto'>
                </figure>
                <h3 class='font-size-20 text-black'>".htmlentities($name)."</h3>
              </div></div>";
        }
    }   
    return $testimonials;
}


function addTest($file, $permFolderLoc, $testVals){
    $sql = "INSERT INTO testimonials VALUES(?,?,?)";
    return pushFile($file, $permFolderLoc, $sql, $testVals);
}


function testNo(){
    $sql  = "SELECT COUNT(*) FROM testimonials WHERE ?";
    $stmt = querySelect('i', $sql, [1]);
    $stmt->bind_result($testNo);
    $stmt->fetch();
    return $testNo ? $testNo:0;
}


/***********************************BLOG**********************************


function blogPosts(){
    $fetchPosts = "SELECT * FROM blogpost WHERE ?";
    $stmt = querySelect('i', $fetchPosts, [1]);
    if($stmt){
        $stmt->bind_result($bid, $blogger, $subject, $content, $postDate);
        $blogPost = null;
        while($stmt->fetch()){
            $blogPost .=
        }
        return $blogPost;
    }
        return null;
}



function blogComments(){
    $fetchComments = "SELECT comments.cid, comments.content, comments.commentOn, comments.commDate FROM comments, blogpost WHERE blogpost.bid=comments.cid AND ?";
    $stmt = querySelect('i', $fetchComments, [1]);
    if($stmt){
        $stmt->bind_result($cid, $commenter, $content, $commentOn, $commDate);
        $comments = null;
        while($stmt->fetch()){
            $comments .=
        }
            return $comments;
    }
            return null;
}
***************************************************************************************/

