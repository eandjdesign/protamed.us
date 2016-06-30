<?php
/**
 * Get page folder dynamically based on url.
 *
 * @return string Page folder.
 */
function getPageFolder() {
  $path = $_SERVER['PATH_INFO'];
  if (!$path) {
    $path = '/index';
  }
  return $path;
}

/**
 * Get js path dynamically based on url.
 *
 * @return string Js path.
 */
function getPageJsPath() {
  $folder = getPageFolder();
  return '/assets/js/pages' . $folder . '.js';
}

/**
 * Get css path dynamically based on url.
 *
 * @return string Css path.
 */
function getPageCssPath() {
  $folder = getPageFolder();
  return '/assets/css/pages' . $folder . '.css';
}

function collectLeadershipContent () {
  $leadership_content = array(
    0 => array(
      "first_name" => "Roger",
      "last_name"  => "Flugel",
      "image"      => "//placehold.it/150/fff",
      "title"      => "Ph.D",
      "role"       => "Chief Executive Officer",
      "bio"        => "Dr. Roger Flugel was previously CEO of TheraVida (Mountain View, CA) from 2007 to 2013 and prior to that was a Principal with Sanderling Ventures, serving in a variety of roles as Director, Chairman, CEO, and board observer of several portfolio companies. While at Sanderling, he helped complete strategic corporate transactions for Kadmus (acquired by Schering-Plough, now Merck) and Aderis (acquired by Schwarz Pharma, now UCB). Prior to Sanderling, Dr. Flugel served as the Director of Venture Analysis at HealthCare Ventures. Dr. Flugel is now responsible for representing ProteoTech in all business transactions and partnerships. Dr. Flugel received his Ph.D. in Biophysics from Harvard University, conducting his research in the Department of Biological Chemistry and Molecular Pharmacology at Harvard Medical School.",
    ),
    1 => array(
      "first_name" => "Joann",
      "last_name"  => "Data",
      "image"      => "//placehold.it/150/fff",
      "title"      => "M.D., Ph.D",
      "role"       => "Chief Medical Officer",
      "bio"        => "Dr. Joann L. Data, Ph.D., M.D., serves as the Chief Medical Officer of ProtaMed, Inc. Dr. Data received her M.D. from Washington University School of Medicine, her Ph.D. in Pharmacology from Vanderbilt University, and her B.S. from Purdue University.  In her extensive career, she has held worked for Upjohn Company, Cortex Pharmaceuticals Inc., Amylin Pharmaceuticals, Allergan Pharmaceutics, CoCensys, Inc., Hoffmann-La Roche and Burroughs-Wellcome.  She has held several different positions at these companies including Clinical Development, Regulatory Affairs and Quality Assurance all at the Vice President and senior management levels. Dr. Data received her M.D. from Washington University School of Medicine, her Ph.D. in Pharmacology from Vanderbilt University, and her B.S. from Purdue University. She serves on the editorial boards of the Journal of Clinical Pharmacology and Experimental Therapeutics, the Journal of Pharmaceutical Medicine and the Journal of Pharmacology and Therapeutics. She serves as a Member of Advisory Board at Mountain Group Capital LLC and Limestone Fund, LLC.",
    ),
    2 => array(
      "first_name" => "Ken",
      "last_name"  => "Duchin",
      "image"      => "//placehold.it/150/fff",
      "title"      => "Ph.D",
      "role"       => "Chief Development Officer",
      "bio"        => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dapibus sapien a odio tempus porta. Sed accumsan felis elit, eu luctus nisi facilisis vitae. Morbi fermentum ut massa quis interdum. Donec bibendum quam orci, semper vestibulum lectus facilisis eget. Fusce suscipit cursus magna tempor rutrum. Aliquam fringilla commodo dolor sed commodo. In hac habitasse platea dictumst. Proin rhoncus mauris nec urna ornare volutpat. Suspendisse id fringilla mi, dictum ultrices orci. Maecenas convallis mi vitae mauris commodo scelerisque.",
    ),
    3 => array(
      "first_name" => "Luke",
      "last_name"  => "Esposito",
      "image"      => "//placehold.it/150/fff",
      "title"      => "Ph.D",
      "role"       => "Vice President of Product Development",
      "bio"        => "Luke Esposito, Ph.D., has over 15 years of experience in the field of amyloid diseases, with over 9 years of experience in the discovery and early-stage development of therapeutics that target pathogenic, misfolded proteins.  He has managed internal R & D programs, including the Parkinson’s Disease and AL amyloidosis programs, and lead interactions with external collaborators, consultants, and partners.   Prior to joining the company, Dr. Esposito spent 6 years studying pathogenic mechanisms of Alzheimer’s Disease at the Gladstone Institute of Neurological Disease at the University of California, San Francisco.",
    ),
    4 => array(
      "first_name" => "Mary",
      "last_name"  => "Hoshizaki",
      "image"      => "//placehold.it/150/fff",
      "title"      => "CPA",
      "role"       => "Vice President of Finance",
      "bio"        => "Mary Hoshizaki has over 30 years of experience as a CPA in private industry and public accounting.  The last 20 years she has worked with multiple startup companies ranging from internet based businesses to optical display technologies and manufacturing.  Her 9-year tenure with ProtaMed brings her expertise in forecast modeling, equity management, GAAP financial statements, internal controls, Federal grant management and audits, corporate taxation and financial statement audits.",
    ),
  );
  return $leadership_content;
}

$allLeadershipContent = collectLeadershipContent();


// function getLeadershipContent(array & $leadership_content) {
//   print_r($leadership_content[1]);
//   return $leadership_content[$leader];
// }
