<!doctype html>
<html lang="en">

<!-- START head.blade.php -->
@include("head")
<!-- END nav.blade.php -->

<!-- START body -->
<body style="background-color: #4d4d4d !important">

    <!-- START nav.blade.php -->
    @include("nav");
    <!-- END nav.blade.php -->

    <!-- START main -->
    @yeild("body")
          
               
              

    <!-- START footer.blade.php -->
   @include("footer");
<!-- END footer.blade.php -->

</body> <!-- END Body -->
</html>