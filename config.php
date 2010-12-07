<?php
/**
 * Configuration and MySQL Connection Factory
 *
 * Get a valid MySQL connection:
 *
 *     Configuration::getConnection();
 *
 */

class Configuration {

  /** Configuration::$environment */
  public static $environment = 'development';

  public static $dbhost = 'localhost';
  public static $dbuser = 'root';
  public static $dbpass = '';
  public static $dbname = 'eduhub';

  private static $conn  = null;

  private static $weather = 'cold';

  /**
   * Get a valid MySQL connection
   */
  // TODO: Reconnection automatically on failed connection
  public static function getConnection() {
    if (self::$conn == null) {
      self::$conn = mysql_connect(self::$dbhost, self::$dbuser, self::$dbpass) or die('Error connecting to MySQL');
    }

    mysql_select_db(self::$dbname);

    return self::$conn;
  }

  public static function is_development() {
    return (self::$environment == 'development');
  }

  public static function is_test() {
    return (self::$environment == 'test');
  }
  
  public static function is_stagign() {
    return (self::$environment == 'staging');
  }
  
  public static function is_production() {
    return (self::$environment == 'production');
  }
}
?>
