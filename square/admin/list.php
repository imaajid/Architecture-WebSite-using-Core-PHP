<?php

include_once("config.php");





                            $sql = 'SELECT * FROM contact_us';
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {

                                    echo json_encode($row);

                                }
                                }



                            ?>