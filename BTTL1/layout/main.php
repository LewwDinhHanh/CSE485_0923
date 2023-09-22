            <div class="col-9 p-3">
                <div class="header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-list fs-1"></i>
                        <span class="fs-1">USERS</span>
                    </div>
                    
                        <div class="row">
                            <div class="input-group p-3 col-md-3">
                                <a class="input-group-text bg-warning"><i class="bi bi-search"></i></a>
                                <input type="text" class="form-control" placeholder="Search here ...">
                            </div>
                        </div>
                </div>
                <div>
                    <button class="bg-success fs-3"><a href="layout/delete.php" class="text-white" style="text-decoration: none">Add user</a></button>
                </div>
                <div class="main p-3 fs-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Groups</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                for ($i=0;$i<7;$i++){
                            ?>
                                    <tr>
                                        <th scope="row" class="fw-normal"><?= $fullname[$i]; ?></th>
                                        <td class="fw-bold"><?= $email[$i] ;?></td>
                                        <td><?= $gender[$i];?></td>
                                        <td><p class="bg-danger rounded-2 text-center text-white"><?= $group[$i];?></p></td>
                                        <td><?= $mobile[$i];?></td>
                                        <td><?= $date[$i];?></td>
                                        <td><i class="bi bi-dot h1 text-center text-secondary"></i></td>
                                        <td>
                                            <a href=""><i class="bi bi-shield-shaded"></i></a>
                                            <a href=""><i class="bi bi-pen-fill"></i></a> 
                                            <a href=""><i class="bi bi-trash3"></i></a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
            </div>
        </div>
    </div>