<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>title</title>
</head>
<body>
<div class="layout">
    <?php
    // require 'config';
    include 'header.php';
    include 'sidebar-program-head.php';   
    ?>
    </div>
    <div class="content">
        <!-- start coding here -->
        <?php
            include 'dashboard.php';
        ?>
    </div>
    <div class="vw-90 ms-3 me-3 p-3 mt-4 rounded first-div container-div container-adjust position-relative">
            <h1>Academic Year/Semester</h1>
            <hr class="hr"/>
            
            <button type="button" class="btn btn-primary btn-lg btn-modal5 py-2 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                        SET
            </button>
            <div class="modal fade" id="exampleModal"data-bs-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">User Account</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="row align-items-start mt-2">
                                        <div class="col">
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Title:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        <h5>Date</h5>
                                        <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">From:</span>
                                                <input type="text" class="form-control">
                                                <span class="mx-2"></span>
                                                <span class="input-group-text" id="inputGroup-sizing-sm">To:</span>
                                                <input type="text" class="form-control">
                                                                
                                        </div>
                                        </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" >Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            

    </div>





</body>
</html>
