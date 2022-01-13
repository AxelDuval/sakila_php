</main>

<footer class=" footer py-3 bg-dark mt-5">
  
  <p class="text-center text-muted">© 2021 Sakila</p>
</footer>



<script src="../js/vendor/modernizr-3.11.2.min.js"></script>
<script src="../js/plugins.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>






<?php
if ($_SESSION != null) {
} else {
?>
    <script type="text/javascript">
        document.getElementById("logout").style.display = "none";
    </script>
<?php
};
?>

</body>

</html>

