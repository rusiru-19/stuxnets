<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login Page</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="./Edits/css" rel="stylesheet">
<link rel="stylesheet" href="./Edits/font-awesome.min.css">
<link rel="stylesheet" href="./Edits/style.css">





        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script nonce="7762ca7b-b752-42b7-b543-efb0bb3eb619">
            (function(w, d) {
                !function(f, g, h, i) {
                    f[h] = f[h] || {};
                    f[h].executed = [];
                    f.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    f.zaraz.q = [];
                    f.zaraz._f = function(j) {
                        return function() {
                            var k = Array.prototype.slice.call(arguments);
                            f.zaraz.q.push({
                                m: j,
                                a: k
                            })
                        }
                    }
                    ;
                    for (const l of ["track", "set", "debug"])
                        f.zaraz[l] = f.zaraz._f(l);
                    f.zaraz.init = ()=>{
                        var m = g.getElementsByTagName(i)[0]
                          , n = g.createElement(i)
                          , o = g.getElementsByTagName("title")[0];
                        o && (f[h].t = g.getElementsByTagName("title")[0].text);
                        f[h].x = Math.random();
                        f[h].w = f.screen.width;
                        f[h].h = f.screen.height;
                        f[h].j = f.innerHeight;
                        f[h].e = f.innerWidth;
                        f[h].l = f.location.href;
                        f[h].r = g.referrer;
                        f[h].k = f.screen.colorDepth;
                        f[h].n = g.characterSet;
                        f[h].o = (new Date).getTimezoneOffset();
                        if (f.dataLayer)
                            for (const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({
                                ...t[1],
                                ...u[1]
                            })))))
                                zaraz.set(s[0], s[1], {
                                    scope: "page"
                                });
                        f[h].q = [];
                        for (; f.zaraz.q.length; ) {
                            const v = f.zaraz.q.shift();
                            f[h].q.push(v)
                        }
                        n.defer = !0;
                        for (const w of [localStorage, sessionStorage])
                            Object.keys(w || {}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{
                                try {
                                    f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                                } catch {
                                    f[h]["z_" + x.slice(7)] = w.getItem(x)
                                }
                            }
                            ));
                        n.referrerPolicy = "origin";
                        n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                        m.parentNode.insertBefore(n, m)
                    }
                    ;
                    ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            }
            )(window, document);
        </script>
    
  <style>
h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}
</style>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                    	<div class="login-wrap p-0">
                            <h3 class="mb-4 text-center"> </h3>
                        <h2 class="heading-section"> </h2>
                        <h3 class="mb-4 text-center">Login Here...</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="login-wrap p-0">
                            <h3 class="mb-4 text-center"> </h3>
                            <form action="login.php" method="post" class="signin-form">
                            	
                                <div class="form-group">

                                	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                                    <input type="text" class="form-control" name="uname" placeholder="User Name" required="">
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required="">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="Submit" class="form-control btn btn-primary submit px-3">Login</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50">
                                        
                                        </label>
                                   
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             </div>

                                    
                                    
                                    
                                </div>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;7961b3746f3d3fe3&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

<style>


body {
  background-image: url('https://wallpapercave.com/wp/wp2406521.jpg');
  background-repeat: repeat;
  background-attachment: fixed;
  background-size: 100% ;
}
</style>
</body>
</html>
