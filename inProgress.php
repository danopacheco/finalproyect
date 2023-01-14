<?php include '../comunFiles/nav.php'?>
<div id="operations">
                <div id="operations-submenu">
                    <div class="operations-submenu-box" ><a
                            href="?action=admin-status-arriving">Arrivig</a></div>
                    <div class="operations-submenu-box"style=" background-color: rgb(168, 31, 31);"><a href="#">In progress</a></div>
                    <div class="operations-submenu-box"><a href="?action=admin-status-ready">Ready</a></div>

                </div>
                <div id="operations-services-box">
                <?php 
                $allServices=getServiceByStatus("working");
                foreach($allServices as $service){ 
                    echo'
                    <div class="operations-service-container">
                        <div class="operations-plate">'.$service['plate'].'</div>
                        <div class="operations-model">'.$service['model'].'</div>
                        <div class="operations-service">'.$service['service'].'</div>
                        <div class="operations-date">'.$service['date'].'</div>
                       <div class="operations-btn-update">
                            <form action="index.php" method="POST">
                            <input type="hidden" name="action" value="update-ready">
                            <input type="hidden" name="id" value="' .$service['id'].'">
                            <button>Ready</button>
                            </form>
                        </div>
                    </div>';
                }
                
                ?>
                </div>
                
                    
            
        
                


            </div>
<?php include '../comunFiles/footer.php'?>