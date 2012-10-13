<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class User_Credentials extends User {

    /**
     * User class object
     */
    public $obj;
    /**
     * CR value
     */
    public $C;
    
    public function User_Credentials($user_obj) {
        
        $this->obj = $user_obj;
        
    }

    /**
     * 
     * @return none
     */
    public function setCrY() {

        //if ($this->getAttribute('CrY') == null) {
        $c = array();
        $c[0] = '1125 829 1253 805 925 533 325 965 909 413 869 893 261 877 1453 1013 1429 837 885 1741 77 1149 605 253 1485 61 1717 1693 901 1221 349 421 597 1173 1949 1781 885 821 1909 229 1701 669 405 109 1821 293 629 1597 125 1197 ';
        $c[1] = '1941 397 661 2029 381 301 37 893 965 1509 541 885 453 1237 1325 1645 213 469 789 1629 93 397 757 381 125 405 1365 357 45 1325 1333 413 429 1245 1589 381 949 253 781 1133 301 213 1493 669 1909 1125 1213 1197 477 885 ';
        $c[2] = Crypto_mBm::hurvuul(date('Y') . ' ');
        $c[3] = '805 157 1557 1685 53 517 1653 253 1437 957 1525 861 517 301 93 357 1613 1829 861 1221 29 853 157 1141 1029 1037 245 1309 13 621 1741 349 1029 885 853 845 1565 1997 1573 45 1949 1573 1677 389 389 261 941 1717 69 517 ';
        $c[4] = '949 413 1173 1109 629 653 1093 829 925 213 381 821 637 1717 1349 1621 621 917 837 109 53 653 1765 1693 1877 1821 1965 85 261 1917 429 397 1845 1421 1197 1917 621 253 1981 317 1173 381 1597 509 149 1693 149 1789 869 53 ';
        $c[5] = '397 797 469 949 365 653 845 805 909 1269 477 917 973 437 1213 1485 565 941 805 805 77 1709 397 253 37 205 1285 2037 1501 1397 1013 1941 309 1109 1901 1837 77 805 1301 941 1221 357 789 277 1365 1157 1413 277 693 149 ';
        $c[6] = '629 1341 1405 685 1117 773 1197 909 805 37 837 829 1133 445 1293 2037 925 813 253 621 53 1205 1965 477 677 1981 1141 925 117 909 1277 77 1789 653 301 221 1621 485 29 197 1149 1069 1477 861 285 1333 1317 1381 901 1661 ';
        $c[7] = '189 1245 1533 1557 293 269 45 1501 725 381 837 157 1813 269 1789 1637 349 333 189 1405 5 469 1805 1781 1069 1349 317 957 1245 253 157 1589 37 1229 1189 1373 1117 621 1365 2021 1789 1317 861 1413 1421 1605 1989 1421 549 1237 ';
        $c[8] = '789 949 901 877 949 829 1805 893 461 1221 1509 925 789 821 29 197 365 373 925 757 133 1693 1613 949 301 589 165 869 221 1125 389 1277 365 1613 1485 1989 1173 373 1085 2021 669 69 821 1173 237 1925 1373 701 1229 213 ';
        $c[9] = '1805 541 125 1165 597 269 317 1245 1621 1461 53 1733 261 501 1029 341 13 797 253 1237 13 37 1173 629 1589 1349 69 333 13 1717 637 261 1085 325 525 605 749 165 669 557 589 1005 1773 1461 1565 309 917 1365 741 1133 ';
        $c[10] = '1701 2021 141 853 1925 925 933 821 805 565 181 909 213 165 1645 1381 149 925 773 677 45 1517 1493 477 141 269 1213 1621 1469 981 413 453 589 1205 29 1813 1053 381 949 109 1709 1189 1645 1621 2021 141 365 517 501 1901 ';
        $c[11] = '741 1197 1909 677 1565 485 877 1925 13 1349 837 1277 949 53 277 2037 269 1349 517 1541 5 1453 1677 1997 1341 1661 1365 1725 1485 429 1605 789 501 1245 1325 413 1981 309 1197 885 1485 621 1533 1453 1989 1533 1421 837 1621 1509 ';
        $c[12] = '1605 261 189 1237 477 269 197 1445 877 197 1997 533 1669 677 981 277 1149 805 877 269 5 605 341 149 1397 1381 1269 893 125 613 917 1325 1181 981 189 941 1397 597 2029 1533 205 165 1197 973 381 1117 165 1365 941 1293 ';
        $c[13] = '1437 517 453 37 669 757 1541 773 877 205 85 861 333 5 381 1293 1429 853 781 893 45 501 525 29 1029 1685 1397 1413 1789 173 1925 1341 53 1997 1597 365 389 1797 1741 1333 1213 317 1629 1869 1693 549 1109 1973 781 1669 ';
        $c[14] = '1805 541 125 1165 597 269 317 1245 1621 1461 53 1733 261 501 1029 341 13 797 253 1237 13 37 1173 629 1589 1349 69 333 13 1717 637 261 1085 325 525 605 749 165 669 557 589 1005 1773 1461 1565 309 917 1365 741 1133 ';
        $c[15] = '77 245 317 1037 573 925 1557 861 805 1309 325 925 301 493 1909 645 461 1237 837 253 37 1725 717 949 1309 1877 429 509 1941 1269 1709 1733 733 1293 1597 101 981 237 1173 973 1125 893 1165 1837 1965 53 493 1173 1565 757 ';
        $c[16] = '445 421 1573 1269 253 485 989 1813 1517 1613 181 1405 1389 277 197 1173 21 597 989 933 5 1381 685 1165 1509 1869 389 1389 933 1053 1973 1909 997 645 557 1741 365 165 877 1309 1581 405 861 149 405 597 1349 117 1365 1421 ';
        $c[17] = '1565 1245 1925 757 973 269 1117 1117 1333 1669 1645 1317 1541 973 1701 1701 837 1325 1317 13 5 1861 1701 285 1829 1709 1517 1197 797 997 1885 677 653 1717 1549 789 1325 301 1205 1637 2037 357 1813 669 1709 1389 13 1277 1557 85 ';
        $c[18] = '605 573 749 565 621 869 1725 253 669 1317 381 869 605 709 1133 1245 253 549 525 1373 141 1021 493 629 1213 477 557 629 1085 1189 1613 1149 605 1469 5 1493 1285 533 21 1901 1421 685 733 1269 709 1285 253 1853 501 533 ';
        $c[19] = '197 1661 1869 1877 757 269 1245 1053 493 1757 149 237 349 501 1093 629 837 53 253 1045 13 669 1125 1005 1341 45 317 677 973 1077 445 1277 1197 1341 117 621 885 461 1709 1341 237 69 669 405 1205 1709 1349 1973 469 1813 ';
        $c[20] = '1021 1421 109 77 453 493 1997 813 1717 1685 85 613 549 133 1085 941 157 885 253 725 13 1029 1453 1309 581 1021 1349 1469 1877 1829 789 1533 1013 749 165 1413 277 301 2029 341 1757 1165 933 1989 957 653 669 1805 1261 1157 ';
        $c[21] = '1301 805 1173 461 797 541 589 805 861 501 1805 941 445 253 1405 973 1181 885 805 757 109 429 1717 253 341 733 685 965 1285 1173 1685 621 781 725 1405 1357 2013 893 965 1085 653 1501 29 77 1285 109 1973 605 461 213 ';
        $c[22] = '781 253 1773 85 941 869 581 837 533 1397 1149 877 1221 421 677 549 1077 613 837 1677 85 869 493 405 1765 2005 757 365 1901 1069 29 765 253 1181 1869 245 1525 661 1341 1965 997 1661 1269 413 1133 429 1821 29 613 1101 ';
        $c[23] = '405 1013 1749 1157 485 477 1333 213 1373 717 1405 1341 917 805 301 1389 653 1517 1597 1909 5 1869 717 1813 1493 669 13 1005 1757 285 1517 173 1709 1981 1029 349 1693 1645 1045 1061 77 421 677 1501 1093 1525 1157 805 1573 1749 ';
        $c[24] = '629 461 141 893 1413 373 709 1357 1029 581 1997 405 981 1029 133 173 445 1357 965 1941 5 1029 669 1181 669 1973 949 1429 1725 1661 1677 1637 1637 1653 677 261 1933 1333 1837 2029 1509 165 637 1477 1293 1525 261 1461 1877 525 ';
        $c[25] = '1077 405 1277 1693 1485 773 469 605 1053 1997 1581 357 1389 245 1413 1525 637 421 1101 733 5 397 877 1677 605 1013 333 1869 1597 2021 173 373 77 1837 1485 245 557 413 1573 637 229 13 2013 789 1053 1021 909 1085 1517 2037 ';
        $c[26] = '1645 749 397 1013 1621 493 917 1061 1301 1117 1701 605 1893 1029 2013 1517 1677 589 1341 61 5 621 1485 1973 1885 1077 1221 1493 509 1765 1405 1637 653 1517 1445 1021 1501 1661 189 1621 1173 1333 1925 1237 1725 333 1485 549 1765 1453 ';

        $this->C = $c;
        return $c;
        //}
    }

    public function getCrY() {

        return $this->C;
    }

}