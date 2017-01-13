<?php
use yii\helpers\Url;
use yii\helpers\Html;
use dektrium\user\models\User;
use yii\bootstrap\Nav;
?>

<aside class="main-sidebar">

    <section class="sidebar">
        
        <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i> <span>ตั้งค่าระบบ</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/groups/index']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                กลุ่มงาน</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['/departments/index']); ?>"><i class="fa fa-circle text-blue"></i> 
                            <span>
                                แผนก</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['/positions/index']); ?>"><i class="fa fa-circle text-blue"></i> 
                            <span>
                                ตำแหน่ง</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>          
                </ul>
<?php if (!Yii::$app->user->isGuest) { ?>
            <?php  if(Yii::$app->user->identity->role == dektrium\user\models\User::ROLE_ADMIN) {?>
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->    
            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> <span>รายงาน-HOSxP</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/report/hosxpreport/personpttype']); ?>"><i class="fa fa-circle text-red"></i> 
                            <span>
                                จำนวนผู้ป่วยตามสิทธิ์</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>  
                    <li><a href="<?php echo Url::to(['/report/hosxpreport/opddiag']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                ๑๐ อันดับโรค</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li> 
                </ul>                
                </ul>
                 <?php }?>   
                
 <?php } ?>                
                <ul class="sidebar-menu">
            <!--        //เมนูการตั้งค่าให้ยุบ-ย่อได้-->            
            <li class="treeview active">
                <a href="#">
                    <i class="glyphicon glyphicon-wrench"></i> <span>ระบบแจ้งซ่อม</span>
                    <i class="fa pull-right fa-angle-down"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo Url::to(['/repair/repairs/indexrepairuser']); ?>"><i class="fa fa-circle text-red"></i> 
                            <span>
                                แจ้งซ่อม</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>  
                    <li><a href="<?php echo Url::to(['/repair/repairs/indexnew']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                งานซ่อมใหม่</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                    <li><a href="<?php echo Url::to(['/repair/repairs/indexok']); ?>"><i class="fa fa-circle text-yellow"></i> 
                            <span>
                                งานซ่อมเสร็จ</span><small class="label pull-right bg-aqua"></small>
                        </a>
                    </li>
                </ul>                
                </ul>

    </section>

</aside>
