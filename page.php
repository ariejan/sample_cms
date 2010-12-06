<?php
/**
 * Page - Renders some page
 */

class Page {

  public function render($name) {
    $conn = Configuration::getConnection();

    // FIXME: Fix SQL Injection bug
    // TODO: Retrieve/store title and content as separate DB fields
    $sql = 'SELECT `content` FROM `pages` WHERE `name`=\'' . $name . '\' LIMIT 1;';

    $result = mysql_query($sql, $conn);

    // TODO: Add extra highlight/message to indicate staging and development environments.
    
    if ($result) {
      return mysql_result($result, 0);
    } else {
      return 'Page not found.';
    }
  }
}
?>
