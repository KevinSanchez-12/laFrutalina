<?php
    class ErrorControl{
        public function index (){
            echo "<div class='u-s-p-y-60'>
            <!--====== Section Content ======-->
            <div class='section_content section_error'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-12 col-md-12 u-s-m-b-30'>
                            <div class='empty'>
                                <div class='empty__wrap'>
                                    <span class='empty__big-text'>404</span>
                                    <span class='empty__text-1'>Página no encontrada, vuelva a intentarlo.</span>
                                    <a class='empty__redirect-link btn--e-brand' href='index.php'>Volver al inicio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>";
        }
    }

?>