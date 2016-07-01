
<?php
include_once('_inc/_start.php');
?><!DOCTYPE html>
<html>
  <?php include_once('_inc/page-parts/head.php'); ?>
  <body class="page-index">
    <?php include_once('_inc/page-parts/svgs.php'); ?>
    <header class="content-header">
      <div class="container">
        <p class="header-caption">Our team is devoted to discovering and developing new therapies for devastating illnesses like Parkinson’s, Alzheimer’s, and other rare amyloid diseases.</p>
        <a href="#" class="btn btn-outline btn-rounded btn-inverted">Contact Us</a>
      </div>
    </header>
    <main class="content-main">
      <section class="section-contain section-intro">
        <div class="container">
          <p class="intro">ProtaMed, is a private drug development company, in Kirkland, WA, focused on targeting misfolded proteins and amyloid diseases.</p>
          <p>We are utilizing our expertise in misfolded protein disorders, amyloid diseases, drug discovery and clinical development, to transform the lives of victims of PD (Parkinson’s Disease) and AD (Alzheimer’s Disease), as well as rare conditions such as AL (immunoglobulin light chain) amyloidosis, TTR (transthyretin) amyloidosis, MSA (Multiple System Atrophy), PSP (Progressive Supranuclear Palsy), HD (Huntington’s Disease) and kidney dialysis amyloidosis.</p>
        </div>
      </section>
      <section class="section-contain section-leadership bg-alternate">
        <h1 class="section-title">Leadership Team</h1>
        <div class="container">
          <ul class="leadership-team--list">
            <?php
              for ($i=0; $i < count($allLeadershipContent); $i++) {
                $leader = $allLeadershipContent[$i];
                $full_name = $leader['first_name'] . ' ' . $leader['last_name'] . ', ' . $leader['title'];
            ?>
              <li class="leader">
                <div class="leader-meta">
                  <img src="<?php echo $leader['image']; ?>" alt="<?php echo $full_name; ?>" class="leader-image">
                  <p>
                    <strong class="leader-name"><?php echo $full_name; ?></strong>
                    <span class="leader-title"><?php echo $leader['role']; ?></span>
                  </p>
                </div>
                <p class="leader-bio"><?php echo $leader['bio']; ?></p>
              </li>
            <?php } ?>
          </ul>
        </div>
      </section>
    </main>
    <?php include_once('_inc/page-parts/foot.php'); ?>
  </body>
</html>
