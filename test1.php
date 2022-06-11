<td>
                                <div class="row">
                                    <div class="col-12">
                                    <?php
                                        echo $row["target_date"];
                                    ?>
                                    </div>
                                    <div class="col-12">
                                    <button type="button" class="edit btn btn-primary"  id="<?php echo $row['job_id']; ?>" data-toggle="modal" data-target="#editModal" data-whatever="@mdo">Edit</button>
                                    <!-- <button class='edit btn btn-primary' id=".$row['sno'].">Edit</button> -->
                                    </div>
                                </div>
                                <!-- <div class="row justify-content-md-center">
                                    <div class="col-md-auto">
                                    <button type="button" class="edit btn btn-primary"  id="<?php echo $row['job_id']; ?>" data-toggle="modal" data-target="#editModal" data-whatever="@mdo">Edit</button>
                                    </div>
                                </div> -->
                               
                            </td> 