</main>
<footer class="page-footer indigo darken-3">
    <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col s6 left-align">
          Thibaut et Cyrille</div>
        <div class="col s6 right-align">
         <!--  <a href="backoffice/homepage.php">Backoffice</a> -->
        </div>
      </div>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/main.js"></script>
   <script type="text/javascript" charset="utf-8">
   
  $(".button-collapse").sideNav();
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  $(document).ready(function() {
    $('select').material_select();
  });
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>
  </body>
</html>
