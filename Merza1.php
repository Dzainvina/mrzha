<?php
date_default_timezone_set('Asia/jakarta');
include "function.php";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo
"\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[37;1m*************** \e[93mJANGAN LUPA SUBSCRIBE\e[37;1m ***************   \n";
echo "\e[37;1m****************** \e[93mCHANNEL YOUTUBE\e[37;1m ******************\n";
echo "\e[37;1m********************* \e[93mDZAINVINA\e[37;1m *********************\n";
echo "\e[37;1m*************** \e[93minstagram : @dzainvina_\e[37;1m *************\n";
echo "\e[37;1m****** \e[93mBANTU SAYA MENGEMBANGKAN CHANNEL SAYA\e[37;1m ********\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m    || >>>>>>>>\e[1;33m".date('[d-m-Y] [H:i:s]')."\e[31;1m<<<<<<<< ||\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[32;1m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo "\e[31;1m*•*•*•*•*•*•*•*•*•*•\e[93mMERZA SAPUTRA\e[31;1m•*•*•*•*•*•*•*•*•*•*\n";
echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
echo "\e[93m*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
echo color("white"," 🔫Token: ");
$token = trim(fgets(STDIN));
echo "\n".color("white","?] Mau Redeem Voucher?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("green","*•*•*•*•*•*•*•*•*•*(AUTO CLAIM)*•*•*•*•*•*•*•*•*•*•*");
        echo "\n".color("white","▶ Claim 15 + 10 + 5");
        echo "\n".color("blue","▶ tunggu lah..");
        for($a=1;$a<=3;$a++){
        echo color("nevy",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓▶Message: ".$message);
        }else{
        echo "\n".color("red","🔐▶ Message: ".$message);
        gofood:
        echo "\n".color("white","▶Claim 15+10+5 laagi");
        echo "\n".color("blue","▶ tunggu lah");
        for($a=1;$a<=3;$a++){
        echo color("nevy",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓▶Message: ".$message);
        }else{
        echo "\n".color("red","🔐▶ Message: ".$message);
        echo "\n".color("white","▶ Claim 15 10 5 sekali lagi!!");
        echo "\n".color("blue","▶ tunggu lah");
        for($a=1;$a<=3;$a++){
        echo color("nevy",".");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAKANGOFOOD0607"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓▶ Message: ".$message);
        }else{
        echo "\n".color("red","🔐▶Message: ".$message);
        sleep(1);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        $voucher14 = getStr1('"title":"','",',$cekvoucher,"14");
        $voucher15 = getStr1('"title":"','",',$cekvoucher,"15");
        echo "\n".color("nevy","!] Total voucher ".$total." : ");
        echo "\n".color("Blue","                     1.▶".$voucher1);
        echo "\n".color("purple","                     2.▶".$voucher2);
        echo "\n".color("green","                     3.▶".$voucher3);
        echo "\n".color("white","                     4.▶".$voucher4);
        echo "\n".color("red","                     5.▶".$voucher5);
        echo "\n".color("blue","                     6.▶".$voucher6);
        echo "\n".color("purple","                     7.▶".$voucher7);
        echo "\n".color("green","                     8.▶".$voucher8);
        echo "\n".color("red","                     9.▶".$voucher9);
        echo "\n".color("white","                     10.▶".$voucher10);
        echo "\n".color("blue","                     11.▶".$voucher11);
        echo "\n".color("green","                     12.▶".$voucher12);
        echo "\n".color("purple","                     13.▶".$voucher13);
        echo "\n".color("red","                     14.▶".$voucher14);
        echo "\n".color("white","                     15.▶".$voucher15);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
        $expired14 = getStr1('"expiry_date":"','"',$cekvoucher,'14');
        $expired15 = getStr1('"expiry_date":"','"',$cekvoucher,'15');
         }
  }
 }
 }