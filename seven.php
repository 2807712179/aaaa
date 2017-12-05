<?php
  /*
    * 弱类型语言在定义变量的时候  ， 这个变量是没有类型的  
    * 
    * 
    *   php 中 有三大类 类型  
    * 
    *     1 、 标量 
    *     整形       int      integer          比如    1 ，  123  ，  -4
    *     浮点型    float    double    real   比如    1.1787  ，  101.45 , -45211.1
    *     布尔型    bool     boolean          比如    true   false  
    *     字符型    string                    比如    "true"
    *    
    *     2、 复合型
    *      array  数组       比如：  $arr  =  array(123 , 456 , 789 );
    *      object 对象
    * 
    *     3、特殊类型
    *      resource   资源 
    *      null       空型
    */
  
  $a =1 ;
  
  $c = true;
  
  $b ="ggg";
  
  $d = $a+2 ;
            
 /* 
  * 输出一个变量的类型
  * 
  * */
 
 var_dump($d);
  
  
  
?>