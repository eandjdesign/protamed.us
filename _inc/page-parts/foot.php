<footer class="content-footer">
  <section class="section-contain section-contact bg-highlight">
    <div class="container">
      <a href="#" class="btn btn-outline btn-rounded btn-inverted">Contact Us</a>
    </div>
  </section>

  <section id="contact-us" class="section-contain section-contact-drawer bg-highlight">
    <div class="container form-container">
      <?php include_once('_inc/page-parts/contact-form.php'); ?>
    </div>
  </section>

  <address>
    <p>
      <svg class="svg-icon--phone svg-fill--greyscale">
        <use xlink:href="#svg-icon--phone"></use>
      </svg>
      +1-425-823-0400
    </p>
    <p>ProtaMed, Inc.<br>
    12026 115th Avenue NE, Suite 100<br>
    Kirkland, Washington, USA 98034</p>
  </address>
  <svg class="svg-logo--footer svg-fill--dark">
    <use xlink:href="#svg-logo"></use>
  </svg>
  <p class="copyright bg-alternate">Copyright &copy; <?php echo date('Y'); ?> ProtoMed, Inc.</p>
</footer>
