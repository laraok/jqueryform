<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>表单处理示例</title>
<link rel="stylesheet" type="text/css" href="./css/home.css" />
<script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/jquery-validate/1.14.0/jquery.validate.min.js"></script>
<!--下一个JS是对validator 的扩展-->
<script src="./myvalidator.js"></script>
</head>
<body class="P-bg-primary">
<div class="dave-header p-txt-center p-relate">
    <p>其他信息</p>
</div>
<section class="dave-content">
    <div class="dave-conholder">
        <div class="dave-agmt">
            <span class="dave-agmt-span">合同号：10003091003</span>
            <span class="dave-agmt-span FloatRight">新发生</span>
        </div>
        <form id="dave-unitform" action="">
        <div class="dave-inpinfo width100">

            <label for="education" class="p-label">教育程度：</label>
            <select name="education" id="education" class="dave-inpinfo-select">
                <option value=''>教育程度</option>
                                   <option value="1">小学</option>
                                   <option value="2">初中</option>
                                   <option value="3">高中</option>
                                   <option value="7">硕士及以上</option>
                                   <option value="5">专科</option>
                                   <option value="6">本科</option>
                                   <option value="4">中专</option>
                              
            </select>       

            <label for="company" class="p-label">现工作单位/教育/个体经营时间：</label>
            <select name="company" id="company" class="dave-inpinfo-select">
                <option value="">现工作单位/教育/个体经营时间</option>
                                   <option value="0">0个月</option>
                                   <option value="1">1个月</option>
                                   <option value="2">2个月</option>
                                   <option value="3">3个月</option>
                                   <option value="4">4个月</option>
                                   <option value="5">5个月</option>
                                   <option value="6">&gt;=6个月</option>
                                 
            </select>

            <label for="income" class="p-label">个人月收入：</label>
            <input name="income" id="income" class="dave-inpinfo-input" type="number" placeholder="个人月收入">

            <label for="workTime" class="p-label">总工作经验/大学时间：</label>
            <select name="workTime" id="workTime" class="dave-inpinfo-select">
                <option value=''>总工作经验/大学时间</option>
                                   <option value="010">0-1年</option>
                                   <option value="020">1-2年</option>
                                   <option value="030">2-3年</option>
                                   <option value="040">3-5年</option>
                                   <option value="050">5-8年</option>
                                   <option value="060">8-10年</option>
                                   <option value="070">&gt;10年</option>
                   
            </select>

            <label for="severaltimes" class="p-label">过去本公司申请过几次贷款：</label>
            <input name="severaltimes" id="severaltimes" class="dave-inpinfo-input" type="number" placeholder="过去本公司申请过几次贷款">

            <label for="otherIncome" class="p-label">其他月收入：</label>
            <input name="otherIncome" id="otherIncome" class="dave-inpinfo-input" type="number" placeholder="其他月收入">

            <label for="otherContactPhone" class="p-label">其他联系人电话：</label>
            <input name="otherContactPhone" id="otherContactPhone" class="dave-inpinfo-input" type="tel" placeholder="其他联系人电话">

            <label for="otherContactName" class="p-label">其他联系人姓名：</label>
            <input name="otherContactName" id="otherContactName" class="dave-inpinfo-input" placeholder="其他联系人姓名">

            <label for="contactRelated" class="p-label">其他联系人关系：</label>
            <select name="contactRelated" id="contactRelated" class="dave-inpinfo-select">
                <option value=''>其他联系人关系</option>
                                   <option value="6">同事或朋友</option>
                                   <option value="7">同学</option>
                                   <option value="8">其他</option>
                                   
            </select>

            <label for="falg4" class="p-label">在现单位是否购买了社保：</label>
            <select name="falg4" id="falg4" class="dave-inpinfo-select">
                <option value=''>在现单位是否购买了社保</option>
                                   <option value="2">否</option>
                                   <option value="1">是</option>
                                   
            </select>

         
        </div>
        <div class="hide">
        <input name="cid"  class="dave-inpinfo-input" >
         <input type="hidden" name="_token" value="k4uyBENdUaaLkq8imLtTtWtX70Ic8fYr58ElZK5t">          
        </div>
        <div class="dave-subbtn">
    <input type="submit" value="提 交" id="submit_form">
</div>


        </form>
    </div>
</section>


</body>


<script>
    $(function(){
        $("#dave-unitform").validate({
            onsubmit:true,
            rules:{
                education:{required:true},
                company:{required:true},
                income:{required:true,number:true,maxlength:13},
                workTime:{required:true},
                severaltimes:{required:true},
                otherIncome:{required:true,number:true,maxlength:13},
                otherContactPhone:{required:true,isTel:true},
                otherContactName:{required:true,isName:true},
                contactRelated:{required:true},
                falg4:{required:true},
               
            },
            messages:{
                education:{required:"请输入教育程度"},
                company:{required:"请选择现工作单位/教育/个体经营时间"},
                income:{required:"请输入每月总收入金额",number:"请输入正确的金额",maxlength:"最大长度不能超过13位"},
                workTime:{required:"请选择总工作经验/大学时间"},
                severaltimes:{required:"请选择几次贷款"},
                otherIncome:{required:"请输入每月总收入金额",number:"请输入正确的金额",maxlength:"最大长度不能超过13位"},
                otherContactPhone:{required:"请输入其他联系人电话",isTel:"请输入正确的电话号码"},
                otherContactName:{required:"请输入其他联系人姓名",isName:"请输入正确的姓名"},
                contactRelated:{required:"请输入联系人关系"},
                falg4:{required:"请选择是否社保"},               

            },
       submitHandler: function(form)  //校验通过
       {
          $('#submit_form').attr('disabled',"true");  //禁用按钮，避免反复提交
          var _token = $("[name='_token']").val();  
          var samem = $("#otherInfo").val();
          var arrtextk = new Array();  
          var arrtextv = new Array();  
          var arrselk = new Array();  
          var arrselv = new Array(); 
  
          $('.dave-inpinfo-input').each(function(index){         
                     arrtextk[index] = $(this).attr('name');
                     arrtextv[index] = $(this).val();
              });             

          $('input').each(function(index){         
                  console.log(index);
              });             
          

          $("select").each(function(index){
                 arrselk[index] = $(this).attr('name');
                 arrselv[index] = $(this).val();
              });

       
          var url = 'processajax.php'; //Ajax  提交的地址
           $.ajax({
            url:url,
            type:'POST',
            dataType:'json',
            data:{
               _token : _token,
               textk :  arrtextk,
               textv  : arrtextv,
               selk :  arrselk,
               selv  : arrselv,                       
            },
            success:function(data)  {

                  console.log(data);   
                  if (data.status=='ok')
                  {
                     alert(data.msg);  //提示成功
                   //  self.location=document.referrer;
                  }
                  else
                  {
                    alert(data.msg);   //提示失败。具体消息由服务器端返回
                  }

                //5秒后才能再次提交，避免过于频繁刷单
                 setTimeout(function() { 
                         $('#submit_form').removeAttr("disabled");  
                      },5000); 

                },
                error:function(){
                    alert("发生了一个未知的服务器端错误 ^_^ ");
                    $('#submit_form').removeAttr("disabled");
                }            

           });
          }, 

      invalidHandler: function(form, validator) //校验没通过
        {  
              console.log('表单验证没通过');
              return false; 
        } 

      });

      console.log('使用JSON批量给页面元素赋初始值,JSON由服务器端传入，常应用于修改的场合');

      // var income = {"cid":"123","education":"1","workTime":"010","company":"0","income":"111.00","otherIncome":"1200.00","otherContactName":"\u5176\u4ed6\u8054\u7cfb\u4eba","contactRelated":"7","otherContactPhone":"0755-5445587","severaltimes":"1","falg4":"2"};
      // for(var x in income){
      //   $("[name='" + x + "']").val(income[x]); 
      // }
    
   })

</script>
</html>
