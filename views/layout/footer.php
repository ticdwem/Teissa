</div>
</main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
               <div class="text-muted"></div>
               <div>
                   <a href="#"></a>
                   &middot;
                   
                        </div>
                    </div>
                    <p>DESARROLLADO POR TICDWEM &COPY; <?= date('Y') ?></p>
                </div>
            </footer>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
             $(".owl-carousel").owlCarousel();
             
        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $('.owl-carousel').owlCarousel({
            items:1,
            loop:true,
            margin:10,
            nav:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
           
            
        });
    </script>

</body>
</html>
            