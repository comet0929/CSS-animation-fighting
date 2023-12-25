  
<link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="main.css" rel="stylesheet" type="text/css">
<link href="animate.css" rel="stylesheet" type="text/css">
 

<body>

    <div class="row app-fight-zoom">
        <div class="col-4 col-sm-4 p3 col-md-4">
            <div>
                <div class="user-info-fight mt-3" id="user-0">
                    <div class="avatar-wrap user-avatar-fight user-0" >
                        <img src="https://oceanfrontmansion.foundation/uploads/e0219d5eb87ab8be1a46dc88.jpg" class="user-avatar-img"> 
                        <div class="gun-wrap-0" id="left-gun">
                            <div class="gun-body-0"> 
                                <!--  -->
                                <!--  -->
                            </div>
                        </div> 
                        <!-- <div class="pan-0"></div> -->
                    </div>  
                    <div class="blood-info">
                        <p class="blood-pro"><span>100</span>%</p>
                        <div class="text-center app-fight-blood-wrap">
                            <div class="app-fight-blood"></div>  
                        </div> 
                    </div> 
                    <div class="text-center winner-fighter mt-4">
                        <span></span>
                    </div>
                    
                </div> <!---->
            </div>
        </div> 
        <div class="col-4 col-sm-4 p1 col-md-4 m-auto app-fight-zoom-board">
            <div class="d-flex align-items-center justify-center">
                <div class="text-center">
                    <p class="b-title">4 Boxes</p> 
                    <p class="s-title"> Battle Value:  $181 </p> 
                    <p class="s-title mt-3"> Reward Value: <span class="fight-reward-price">$568</span></p>
                </div>
            </div> 
            <div class="d-flex justify-center mt-4">
                <img src="https://oceanfrontmansion.foundation/uploads/replay.png" class="replay-btn ml-2">
            </div>
        </div> 
        <div class="col-4 col-sm-4 p3 col-md-4">
            <div>
                <div class="user-info-fight mt-3" id="user-1">
                    <div class="avatar-wrap user-avatar-fight user-1" >
                        <img src="https://oceanfrontmansion.foundation/uploads/e0219d5eb87ab8be1a46dc88.jpg" class="user-avatar-img"> 
                        <div class="gun-wrap-1" id="right-gun">
                            <div class="gun-body-1">
                                <!--  -->
                                <!--  -->
                            </div>
                        </div> 
                           
                    </div>  
                    <div class="blood-info">
                        <p class="blood-pro"><span>100</span>%</p>
                        <div class="text-center app-fight-blood-wrap">
                            <div class="app-fight-blood"></div>  
                        </div> 
                    </div> 
                    <div class="text-center winner-fighter mt-4">
                       <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12"> 
            <button onClick="run(0)">RUN</button>
        </div>
    </div>

     
</body>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src='keyframe.min.js'></script>
<script>

// 1701039048
// 1701049919
// 1701276558
    const ls_b = [35, 50, 40, 30, 45, 42, 38, 47, 44];
    const ws_b = [25, 26, 27, 28, 29, 30, 31, 32, 33];

    function run(){
        run_animation(1701032346, 1)
    }
        

    function run_animation(id, winner){    
         
        $('#user-0 .app-fight-blood').css('width', '100%'); 
        $('#user-1 .app-fight-blood').css('width', '100%');
        $('#user-0 .blood-pro span').text('100'); 
        $('#user-1 .blood-pro span').text('100');

        $('.bullet-hole').remove();
        $('.bullet-hole-big').remove();
        $('.die').remove();
        $('.winner-fighter span').text('')
        $('.blood-info').css('display','flex');

        const die = `<div class='die'>`+
                        `<svg class="die-icon" enable-background="new 0 0 86.577 100" version="1.1" viewBox="0 0 25.973405 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" class="ng-scope"><metadata><rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type><dc:title></dc:title></cc:work></rdf:rdf></metadata><path d="m13.011 0c-7.9422 0-14.676 7.8243-12.646 15.502 0.4941 1.8702 1.0149 3.5865 1.6206 5.1216-0.9588 1.0656-0.5445 3.1233 0.3678 4.1166 0.5595 0.6087 1.8096 1.6554 2.8584 2.0814 0.8484-0.1242 3.3303-0.264 3.1767 2.3619 0.2877 0.117 0.5889 0.2184 0.8994 0.3102v-1.0383h0.3741v1.1406c0.5028 0.1281 1.0287 0.2274 1.5768 0.2937v-1.4343h0.3729v1.4709c0.5079 0.048 1.0287 0.0741 1.5636 0.0741h0.0138v-1.5456h0.3735v1.5384c0.5322-0.0114 1.0542-0.0438 1.5564-0.1047v-1.4337h0.3744v1.38c0.5217-0.0771 1.0227-0.1824 1.4997-0.3186v-1.0608h0.3735v0.9453c0.2145-0.0708 0.4233-0.1455 0.6258-0.2295-0.4173-3.2814 2.8986-2.7318 3.3696-2.6379 1.0845-0.3639 2.46-1.5096 3.0549-2.1564 0.9489-1.0314 1.3635-3.219 0.2505-4.2411-0.0375-0.0345-0.081-0.0585-0.1203-0.0921 0.4134-1.203 0.7785-2.5206 1.1178-3.9558 1.8237-7.7289-4.7124-16.088-12.654-16.088zm-3.0447 19.682c-1.3647 0.9888-2.8473 2.8941-4.6668 1.7886-1.8201-1.1055-1.8621-5.163-0.7941-6.7731 0.9171-1.3839 6.1746-1.0491 6.8517 0.1122 0.6774 1.161-0.0264 3.8835-1.3908 4.8723zm4.8516 4.875c-0.1674 0.5037-1.2084-0.159-1.6746-0.4866-0.4656 0.3276-1.5072 0.9906-1.6749 0.4866-0.2172-0.6525 1.1406-4.7202 1.3041-5.0487 0.0486-0.0978 0.1215-0.1815 0.1992-0.2424 0.039-0.0642 0.0948-0.0897 0.1596-0.0834 0.0045-8.65e-4 0.0078 6e-4 0.0123 0 0.0042 6e-4 0.0078-8.65e-4 0.0123 0 0.0648-0.0063 0.1206 0.0195 0.1599 0.0837 0.078 0.0603 0.1506 0.144 0.1983 0.2421 0.1626 0.3282 1.5213 4.3965 1.3038 5.0487zm6.4743-3.4101c-1.7424 1.2237-3.3486-0.5793-4.7757-1.4739-1.428-0.8946-2.3106-3.5655-1.7112-4.7694 0.5982-1.2033 5.8221-1.8876 6.8292-0.5685 1.1715 1.536 1.3989 5.5869-0.3423 6.8118z" fill="#fff" stroke-width=".3"></path></svg>`+
                    `</div>`;

        var u0_b = 100;
        var u1_b = 100;

        const s_d = String(id).slice(-6).split('');
        var round = [];
        var u0_blood = [];
        var u1_blood = [];
        for(var i = 0; i < s_d.length; i++){
            round.push(s_d[i] % 5)            
        }
    
        var blood_data = [];  
        for (let i = 0; i < 4; i++) {
            const randomIndex = Math.floor(Math.random() * 9);
            const u0_bloodValue = winner === 0 ? ws_b[randomIndex] : ls_b[randomIndex];
            const u1_bloodValue = winner === 1 ? ws_b[randomIndex] : ls_b[randomIndex]; 
            blood_data.push(u1_bloodValue, u0_bloodValue);
        } 
        
        var cnt = 0; 
        var ani = setInterval(() => {
            
            const c_round_fire = round[cnt];
            const c_idx = cnt % 2;
            if(c_idx == 0){
                u1_b = u1_b - blood_data[cnt];
                if(u1_b < 0){
                    u1_b = 0;
                }
                setTimeout(() => { 
                    blood_manage(u1_b, 1)
                }, 850);  
            } else{
                u0_b = u0_b - blood_data[cnt]
                if(u0_b < 0){
                    u0_b = 0;
                }
                setTimeout(() => { 
                    blood_manage(u0_b, 0)
                }, 850);  
            }
           
            if(c_round_fire == 0){
                fire_0(c_idx)
            } else if(c_round_fire == 1){
                fire_1(c_idx)
            } else if(c_round_fire == 2){
                fire_2(c_idx)
            } else if(c_round_fire == 3){
                fire_3(c_idx)
            } else{
                fire_4(c_idx)
            }    
            
            if ((winner == 0 && cnt == 4) || (winner == 1 && cnt == 5)) { 
                clearInterval(ani);
                setTimeout(() => {
                    if(winner == 0){
                        $('.user-1').append(die);
                        $('#user-0 .winner-fighter span').text('WINNER!');
                    }else{
                        $('.user-0').append(die)
                        $('#user-1 .winner-fighter span').text('WINNER!');
                    }
                    $('.blood-info').css('display','none');
                    console.log(">>game over")
                }, 800);
            }
            cnt++;
        }, 2000);   
    }  

    function blood_manage(percent, idx){
        if(idx == 0){
            $('#user-0 .app-fight-blood').css('width', percent+'%');
            $('#user-0 .blood-pro span').text(percent);  
        }else{
            $('#user-1 .app-fight-blood').css('width', percent+'%');
            $('#user-1 .blood-pro span').text(percent);
        }
    }

    function fire_0(idx){
        const screen_width = window.screen.width;
        var wave = '';
        if(screen_width > 900){
            const  wave_red =  "power_wave_red";
            const  wave_blue = "power_wave_blue";
            wave = idx==0? wave_red: wave_blue;
        }else{
            const wave_red = "power_wave_red_mobile";
            const wave_blue = "power_wave_blue_mobile";
            wave = idx==0? wave_red: wave_blue;
        }  
        const power_wave = '<div class="'+wave+'"></div>'
        const target = $('.user-'+((idx+1)%2));   
        const me = $('.user-'+idx);   
        const a1_w = $('.user-0').offset();  
        const a2_w = $('.user-1').offset();  
       
        var distance = a2_w.left - a1_w.left - 2 * (200) + 300;
        if(idx == 1){
            distance = distance * (-1);
        }  

        console.log(">>>DISTANCE", distance)
        
        const pan = idx==0? '<div class="pan-0"></div>':'<div class="pan-1"></div>';
        me.append(pan) 
        
        $.keyframe.define([{
            name: 'pan',
                '0%': {transform: 'translate(0) rotateY(10deg)', opacity: '1'}, 
                '50%': {transform: 'translate('+distance*0.5+'px) rotateY(120deg)', opacity: '1'}, 
                '70%': {transform: 'translate('+distance+'px) rotateY(180deg)', opacity: '1'},
                '100%': {transform: 'translate(0) rotateY(0deg)', opacity:'0'}
            }]); 
        $(".pan-"+idx).playKeyframe({
            name: "pan",
            duration: "500ms",
            timingFunction: "ease-in-out",
            fillMode: "forwards",
        }); 
        
        setTimeout(() => {
            target.prepend(power_wave)
            target.addClass('avatar-damaged_big')
            setTimeout(() => {  
                setTimeout(() => { 
                    $('.' + wave).remove();    
                    target.removeClass('avatar-damaged_big')
                }, 350); 
                $(".pan-"+idx).removeAttr("style"); 
                $(".pan-"+idx).remove();
            }, 500);
        }, 150);   
    }

    function fire_1(idx){
        const screen_width = window.screen.width;
        var wave = '';
        if(screen_width > 900){
            const  wave_red =  "power_wave_red";
            const  wave_blue = "power_wave_blue";
            wave = idx==0? wave_red: wave_blue;
        }else{
            const wave_red = "power_wave_red_mobile";
            const wave_blue = "power_wave_blue_mobile";
            wave = idx==0? wave_red: wave_blue;
        }  
        const power_wave = '<div class="'+wave+'"></div>'
        const target = $('.user-'+((idx+1)%2));   
        const a1_w = $('.user-0').offset();  
        const a2_w = $('.user-1').offset();  
       
        var distance = a2_w.left - a1_w.left - $('.user-0').width();
        if(idx == 1){
            distance = distance * (-1);
        }
        
        $.keyframe.define([{
            name: 'tete',
            '0%': {transform: 'translate(0) rotate(10deg)'}, 
            '30%': {transform: 'translate('+distance+'px, -30px) rotate(40deg)'},
            '100%': {transform: 'translate(0) rotate(0deg)'}
        }]);
        $(".user-"+idx).playKeyframe({
            name: "tete",
            duration: "500ms",
            timingFunction: "ease-in-out",
            fillMode: "forwards",
        }); 
        setTimeout(() => {
            target.prepend(power_wave)
            target.addClass('avatar-damaged_big')
            setTimeout(() => { 
                $(".user-"+idx).removeAttr("style"); 
                $('.' + wave).remove();    
                target.removeClass('avatar-damaged_big')
            }, 850);
        }, 150);  
           
    }


    function fire_2(idx){ 
        const screen_width = window.screen.width; 
        var wave = '';
        if(screen_width > 900){ 
            wave = "power_wave";
        }else{ 
            wave = "power_wave_mobile";
        }

        const av_w = $('.user-avatar-img').width();  
        const x = Math.random() * 100;
        const y = Math.random() * 100;
        const offset_x_1 = (Math.random()*2-1)*10
        const offset_x_2 = (Math.random()*2-1)*10
        const offset_y_1 = (Math.random()*2-1)*10
        const offset_y_2 = (Math.random()*2-1)*10

        const howl_gun = '<img src="assets/img/howl.png" class="left-obj howl-gun"/>';
        const howl_fire = '<img src="assets/img/muzzle_flash1.png" class="howl-fire" />'; 
        const bullet_hole_0 = '<img src="assets/img/bullet_hole.png" class="bullet-hole" style="top:' + (y+offset_y_1+offset_y_2) + '%; left:' + (x+offset_x_1+offset_x_2) + '%;" />' 
        const bullet_hole_1 = '<img src="assets/img/bullet_hole.png" class="bullet-hole" style="top:' + (y+offset_y_1) + '%; left:' + (x+offset_x_1) + '%;" />' 
        const bullet_hole_2 = '<img src="assets/img/bullet_hole.png" class="bullet-hole" style="top:' + (y+offset_y_2) + '%; left:' + (x+offset_x_2) + '%;" />' 
        const power_wave = '<div class="' + wave + '"></div>'

        const gun_body = $('.gun-body-'+idx);
        const target = $('.user-'+((idx+1)%2));
        const t_offset = target.offset();
        const t_x = t_offset.left + target.width() / 2;
        const t_y = t_offset.top + target.height() /2;  

        gun_body.empty();
        gun_body.append(howl_gun);
        gun_body.addClass('gun-rotate')
        setTimeout(() => {
            gun_body.removeClass('gun-rotate')
            gun_body.addClass('gun-vibrate')
            gun_body.append(howl_fire)   
            target.addClass('avatar-damaged')
            target.prepend(bullet_hole_0)
            target.prepend(bullet_hole_1)
            target.prepend(power_wave) 
            target.prepend(bullet_hole_2)
            setTimeout(() => {
                gun_body.addClass('gun-hide')
                gun_body.removeClass('gun-vibrate') 
                setTimeout(() => {
                    gun_body.removeClass('gun-hide')  
                    target.removeClass('avatar-damaged')
                    $('.' + wave).remove();    
                    gun_body.empty();  
                        
                }, 200); 
            }, 800);
        }, 400);    
    }


    function fire_3(idx){
        const screen_width = window.screen.width;
        var wave = '';
        if(screen_width > 900){ 
            wave = "power_wave";
        }else{ 
            wave = "power_wave_mobile";
        }
        const av_w = $('.user-avatar-img').width();  
        const x = Math.random() * 100;
        const y = Math.random() * 100;
        const offset_x_1 = (Math.random()*2-1)*10
        const offset_x_2 = (Math.random()*2-1)*10
        const offset_y_1 = (Math.random()*2-1)*10
        const offset_y_2 = (Math.random()*2-1)*10
        const howl_gun = '<img src="assets/img/mp7neon.png" class="left-obj neon-gun"/>';
        const howl_fire = '<img src="assets/img/muzzle_flash1.png" class="neon-fire" />'; 
        const bullet_hole_0 = '<img src="assets/img/bullet_hole.png" class="bullet-hole" style="top:' + (y+offset_y_1+offset_y_2) + '%; left:' + (x+offset_x_1+offset_x_2) + '%;" />' 
        const bullet_hole_1 = '<img src="assets/img/bullet_hole.png" class="bullet-hole" style="top:' + (y+offset_y_1) + '%; left:' + (x+offset_x_1) + '%;" />' 
        const power_wave = '<div class="' + wave + '"></div>'

        const gun_body = $('.gun-body-'+idx);
        const target = $('.user-'+((idx+1)%2));
        gun_body.empty();
        gun_body.append(howl_gun);
        gun_body.addClass('gun-rotate')
        setTimeout(() => {
            gun_body.removeClass('gun-rotate')
            gun_body.addClass('gun-vibrate')
            gun_body.append(howl_fire)   
            target.addClass('avatar-damaged')
            target.prepend(bullet_hole_0)
            target.prepend(power_wave)
            target.prepend(bullet_hole_1)  
            setTimeout(() => {
            gun_body.addClass('gun-hide')
                gun_body.removeClass('gun-vibrate') 
                setTimeout(() => {
                    gun_body.removeClass('gun-hide')  
                    target.removeClass('avatar-damaged')
                    gun_body.empty();  
                    $('.' + wave).remove();               
                }, 200); 
            }, 800);
        }, 400);   
    }


    function fire_4(idx){ 
        const screen_width = window.screen.width;
        var wave = '';
        if(screen_width > 900){ 
            wave = "power_wave";
        }else{ 
            wave = "power_wave_mobile";
        }
        const av_w = $('.user-avatar-img').width();  
        const x = (Math.random() * 2 - 1) * 10 + 50;
        const y = (Math.random() * 2 - 1) * 10 + 50;  
        const howl_gun = '<img src="assets/img/sniper-gun.png" class="left-obj sniper-gun"/>';
        const howl_fire = '<img src="assets/img/muzzle_flash.png" class="sniper-fire" />'; 
        const bullet_hole = '<img src="assets/img/bullet_hole.png" class="bullet-hole-big" style="top:' + y + '%; left:' + x + '%;" />' 
        const power_wave = '<div class="' + wave + '"></div>'

        const gun_body = $('.gun-body-'+idx);
        const target = $('.user-'+((idx+1)%2));
        gun_body.empty();
        gun_body.append(howl_gun);
        gun_body.addClass('gun-rotate')
        setTimeout(() => {
            gun_body.removeClass('gun-rotate')
            gun_body.addClass('gun-vibrate')
            gun_body.append(howl_fire)   
            target.addClass('avatar-damaged')
            target.prepend(bullet_hole)
            target.prepend(power_wave) 
            setTimeout(() => {
                gun_body.addClass('gun-hide')
                gun_body.removeClass('gun-vibrate') 
                setTimeout(() => {
                    gun_body.removeClass('gun-hide')  
                    target.removeClass('avatar-damaged')
                    gun_body.empty();  
                    $('.' + wave).remove();               
                }, 200); 
            }, 800);
        }, 400); 
    }

      



</script>

 

 