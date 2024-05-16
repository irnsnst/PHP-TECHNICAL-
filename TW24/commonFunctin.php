<?php
function doValidation($firstname, $hourslept, $birthyear){
                    $errmsg = '';
                    if (empty($firstname)){
                        $errmsg .= "<br/>You must enter a First Name";
                    }
                    if (empty($hourslept)){
                        $errmsg .= "<br/>You must enter the Hours you sleep";
                    }
                    else {
                        if(!is_numeric($hourslept)){
                            $errmsg .= "<br/>The Hours you sleep must be numeric";
                        }
                    }
                    if (empty($birthyear)) {
                        $errmsg .= "<br/>You must enter your birth year";
                    }
                    else {
                        if (!is_numeric($birthyear)){
                            $errmsg .= "<br/>Your Birth year must be numeric";
                        }
                        else {
                            $length_of_year = strlen($birthyear);
                            if ($length_of_year != 4){
                                $errmsg .= "<br/>Your Birth year must be exactly four number";
                            }
                        }
                    }
                    return $errmsg;
                }
                
                function displayPage($firstname, $hourslept, $birthyear){
                    $current_year = date('Y');
                    $age = $current_year - $birthyear;
                    $years_slept = ($hourslept/24) * $age;
                    
                    echo "<p>Your name is $firstname and you have ";
                    echo "spent $years_slept years of your life sleeping</p>";
                    
                    if ($age > 50){
                        echo "<p>Better start planning for Retirement!</p>";
                        if ($years_slept > 15) {
                            echo "<p>You sleep to much!</p>";
                        }
                    }
                    else {
                        echo "<p>Time is on your side! Really.</p>";
                        echo "<p>Yes, I mean it to you too,</p>";
                    }
                    echo "<p>- END -</p>";
                }
?>