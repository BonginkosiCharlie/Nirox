<?php

    require '../config/connect_db.php';
    require '../config/commons.php';

    function getUsers() {
        try{
            $conn = connect_db();
            $query = $conn->prepare("Call getUsers()");//Prepares the sql query, and returns a statement handle to be used($query)
            $results = array();

            if($query->execute()) {
                $query->bind_result($id, $lname, $fname, $gender, $email, $pass, $dob, $created_at);

                while($query->fetch()) {
                    array_push($results,array('user_id' =>$id, 'lname' => $lname, 'fname' => $fname, 'gender' => $gender, 'email' => $email, 'user_password' => $pass, 'date_of_birth' => $dob, 'date_of_birth' => $created_at)); 
                }
            } else {
                throw new Exception(mysqli_error($conn));//Returns the last error description for the most recent function called
            }

            $query->close();
            $conn->close();

            if (!empty($results)) {
                return $results;    
            } else {
                return 0;
            }

        } catch (Exception $e) {
            $query->close();
            $conn->close();
            throw new Exception($e->getMessage());
        }        
    }


    function numberOfMales() {
        try{
            $conn = connect_db();
            $query = $conn->prepare("Call getNumberOfMales()");//Prepares the sql query, and returns a statement handle to be used($query)
            $results = array();

            if($query->execute()) {
                $query->bind_result($numberOfMales);//Binds variables in the prepared statement for result storage

                if ($query->fetch()) {
                    $results = $numberOfMales;
                }
            } else {
                throw new Exception(mysqli_error($conn));//Returns the last error description for the most recent function called
            }

            $query->close();
            $conn->close();

            if (!empty($results)) {
                return $results;    
            } else {
                return 0;
            }

        } catch (Exception $e) {
            $query->close();
            $conn->close();
            throw new Exception($e->getMessage());
        }
    }

    function numberOfFemales() {
        try{
            $conn = connect_db();
            $query = $conn->prepare("Call getNumberOfFemales()");//Prepares the sql query, and returns a statement handle to be used($query)
            $results = array();

            if($query->execute()) {
                $query->bind_result($numberOfFemales);//Binds variables in the prepared statement for result storage

                if ($query->fetch()) {
                    $results = $numberOfFemales;
                }
            } else {
                throw new Exception(mysqli_error($conn));//Returns the last error description for the most recent function called
            }

            $query->close();
            $conn->close();

            if (!empty($results)) {
                return $results;    
            } else {
                return 0;
            }

        } catch (Exception $e) {
            $query->close();
            $conn->close();
            throw new Exception($e->getMessage());
        }
    }

    function getPosts(){
        try {
            $conn = connect_db();
            $query = $conn->prepare("CALL getPosts()");
            $results = array();

            if($query->execute()) {
                $query->bind_result($post_id, $post, $post_type, $post_date, $user_id);

                while($query->fetch()) {
                    array_push($results,array('post_id' => $post_id, 'post' => $post, 'post_type' => $post_type, 'post_date' => $post_date, 'num_of_likes' => getNumOfPostLikes($post_id), 'num_of_comments' => getNumOfPostComments($post_id), 'post_image' => getPostImage($post_id), 'username' => getUsername($user_id), 'user_image' => getUserImage($user_id), 'user_id' => $user_id)); 
                }   
            } else {
                throw new Exception(mysqli_error($conn));
            }

            $query->close();
            $conn->close();

            if (count($results) > 0) {
                return $results;    
            } else {
                return "No posts available";
            }

        } catch(Exception $e) {
            $query->close();
            $conn->close();
            throw new Exception($e->getmessage());
        }
    }


    function getMessages($user_id, $psychology_id) {
        try {
            $conn = connect_db();
            $query = $conn->prepare("CALL getPsychologyMessages(?, ?)");
            $query->bind_param('ss', $user_id, $psychology_id);
            $results = array();

            if($query->execute()) {
                $query->bind_result($message_id, $message, $message_type, $message_date, $user_id_to, $user_id_from);

                while ($query->fetch()) {
                    array_push($results, array('message_id' => $message_id, 'message' => $message, 'message_date' => $message_date, 'username_to' => getUsername($user_id_to), 'user_to_image' => getUserImage($user_id_to), 'user_id_to' => $user_id_to, 'username_from' => getUsername($user_id_from), 'user_from_image' => getUserImage($user_id_from), 'user_id_from' => $user_id_from)); 
                }   
            } else {
                throw new Exception(mysqli_error($conn));
            }

            $query->close();
            $conn->close();

            if (count($results) > 0) {
                return results;
            } else {
                return "No messages available";
            }

        } catch(Exception $e) {
            $query->close();
            $conn->close();
            throw new Exception ($e->getmessage());
        }
    }