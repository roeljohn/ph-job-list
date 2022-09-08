<?php
/**
 * Similarly, footer.php in a file in the WordPress page hierarchy is used to build 
 * the footer section of a WordPress theme and called in the footer section of all the template files. 
 * The footer.php generally contains the copyright information, calls to JS files, widget areas that 
 * commonly have site navigation.
 */

?>

</main>
<hr class="col-3 col-md-2 mb-5" />

<div class="row g-5">
  <div class="col-md-8">
    <h2>Starter projects</h2>
    <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
    <ul class="icon-list ps-0">
      <li class="d-flex align-items-start mb-1"><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
      <li class="text-muted d-flex align-items-start mb-1">Bootstrap Parcel starter (coming soon!)</li>
    </ul>
  </div>

  <div class="col-md-4">
    <h2>Guides</h2>
    <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
    <ul class="icon-list ps-0">
      <li class="d-flex align-items-start mb-1"><a href="../getting-started/introduction/">Bootstrap quick start guide</a></li>
      <li class="d-flex align-items-start mb-1"><a href="../getting-started/webpack/">Bootstrap Webpack guide</a></li>
      <li class="d-flex align-items-start mb-1"><a href="../getting-started/parcel/">Bootstrap Parcel guide</a></li>
      <li class="d-flex align-items-start mb-1"><a href="../getting-started/vite/">Bootstrap Vite guide</a></li>
      <li class="d-flex align-items-start mb-1"><a href="../getting-started/contribute/">Contributing to Bootstrap</a></li>
    </ul>
  </div>
</div>
  <footer class="pt-5 my-5 text-muted border-top">
    Created by the Bootstrap team &middot; &copy; 2022
  </footer>
</div>		
<?php wp_footer(); ?>

</body>
</html>