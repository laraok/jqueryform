
$(function(){
    // 中文字两个字节
    jQuery.validator.addMethod("byteRangeLength", function(value, element, param) {
        var length = value.length;
        for(var i = 0; i < value.length; i++){
            if(value.charCodeAt(i) > 127){
                length++;
            }
        }
        return this.optional(element) || ( length >= param[2] && length <= param[20] );
    }, $.validator.format("请确保输入的值在{2}-{20}个字节之间(一个中文字算2个字节)"));
    
    //最大长度验证,中文字两个字节
    jQuery.validator.addMethod("mLen", function(value, element, param) {
        var length = value.length;
        for(var i = 0; i < value.length; i++){
            if(value.charCodeAt(i) > 127){
                length++;
            }
        }
        return this.optional(element) || ( length <= param);
    }, $.validator.format("请确保输入的值不大于{0}个字节(一个中文字算2个字节)"));

// 邮政编码验证
    jQuery.validator.addMethod("isZipCode", function(value, element) {
        var code = /^[0-9]{6}$/;
        return this.optional(element) || (code.test(value));
    }, "请正确填写您的邮政编码");

// 姓名验证
    jQuery.validator.addMethod("isName", function(value, element) {
        var name =  /^([a-zA-Z][a-zA-Z.]{2,20})|([\u4e00-\u9fa5]{2,10})$/;
        return this.optional(element) || (name.test(value));
    }, '请正确填写您的姓名！英文中可输入"."');


// 身份证验证
    jQuery.validator.addMethod("isIdCard", function(value, element) {
        var idCard = /^(^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$)|(^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])((\d{4})|\d{3}[Xx])$)$/;
        return this.optional(element) || (idCard.test(value));
    }, "请正确填写您的身份证号码");


// 签发机关验证
    jQuery.validator.addMethod("isIssuCard", function(value, element) {
        var issuCard = /^[\u4e00-\u9fa5]*$/;
        return this.optional(element) || (issuCard.test(value));
    }, "只接受中文文本的签发机关");



// 有效期验证
    jQuery.validator.addMethod("isDate", function(value, element) {
        var date= /^([123456789]\d{3})\/(0\d{1}|1[0-2])\/(0\d{1}|[12]\d{1}|3[01])$/;
        return this.optional(element) || (date.test(value));
    }, "请输入格式为: yyyy/mm/dd的有效日期");



// 街道、路、村验证及其他地址输入
    jQuery.validator.addMethod("address", function(value, element) {
        var address=/^[a-zA-Z0-9\*\u4e00-\u9fa5]+$/;
        return this.optional(element) || (address.test(value));
    }, '请如实根据身份证上户籍地址信息写，无信息统一输入"*"');


// 栋/单元/房间号
    jQuery.validator.addMethod("roomnum", function(value, element) {
        var  roomnum=/^[a-zA-Z0-9\*\u4e00-\u9fa5]*$/;
        return this.optional(element) || (roomnum.test(value));
    }, '请如实根据身份证上户籍地址信息写，无信息统一输入"*"');

// 验证码验证
    jQuery.validator.addMethod("isValicode", function(value, element) {
        var  valicode=/^\d*$/;
        return this.optional(element) || (valicode.test(value));
    }, '请输入正确的验证码');

// 区号验证
    jQuery.validator.addMethod("isAreaCode", function(value, element) {
        var  isAreaCode=/^0[0-9]{2,3}$/;
        return this.optional(element) || (isAreaCode.test(value));
    }, '请输入正确的区号');

// 座机号验证
    jQuery.validator.addMethod("isLanNum", function(value, element) {
        var  lannum=/^[2-9][0-9]{6,7}$/;
        return this.optional(element) || (lannum.test(value));
    }, '请输入正确的座机号');


// 分机号验证
    jQuery.validator.addMethod("isExten", function(value, element) {
        var  exten=/^[0-9]{1,4}?$/;
        return this.optional(element) || (exten.test(value));
    }, '请输入正确的分机号');


// 手机号验证
    jQuery.validator.addMethod("isPhoneNum", function(value, element) {
        var  phonenum=/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/;
        return this.optional(element) || (phonenum.test(value));
    }, '请输入正确的手机号');


// 电话（手机+座机）验证
    jQuery.validator.addMethod("isTel", function(value, element) {
        var  tel=/^((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})))$/;
        return this.optional(element) || (tel.test(value));
    }, '请输入正确的电话号码（手机/座机）');

// 邮箱验证
    jQuery.validator.addMethod("isEmail", function(value, element) {
        var  email=/^[A-Za-z0-9]+([-_.][A-Za-z0-9]+)*@([A-Za-z0-9]+[-.])+[A-Za-z0-9]{2,5}$/;
        return this.optional(element) || (email.test(value));
    }, '请输入正确的邮箱');

//QQ验证
    jQuery.validator.addMethod("isQQ", function(value, element) {
        var  QQ=/^[1-9][0-9]{5,9}$/;
        return this.optional(element) || (QQ.test(value));
    }, '请输入正确的QQ');

//微信验证
    jQuery.validator.addMethod("isWeChat", function(value, element) {
        var  WeChat=/^[a-zA-Z\d_]{5,20}$/;
        return this.optional(element) || (WeChat.test(value));
    }, '请输入正确的微信');

//银行卡验证
    jQuery.validator.addMethod("isBankCard", function(value, element) {
        var  bankcard=/^(\d{16}|\d{19})$/;
        return this.optional(element) || (bankcard.test(value));
    }, '请输入正确的银行卡');

//邮编验证
    jQuery.validator.addMethod("isZipCode", function(value, element) {
        var  zipcode=/^[1-9]\d{5}(?!\d)$/;
        return this.optional(element) || (zipcode.test(value));
    }, '请输入正确的邮编');






})
