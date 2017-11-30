---
layout: page
title: "LOOK XI.CHEN"
description: "You know who am I."
header-img: "img/background3.jpg"
---

<!-- Language Selector -->
<select class="sel-lang" onchange= "onLanChange(this.options[this.options.selectedIndex].value)">
    <option value="0" selected> 中文 Chinese </option>
    <option value="1"> 英文 English </option>
    <option value="1"> 法文 French </option>
</select>

<!-- Chinese Version -->
<div class="zh post-container">

    <!--copied from markdown -->
    <blockquote><p>来去自由<br>
    跟着感觉走</p></blockquote>

    <p>一个事出意外的程序猿<strong>陈茜（XI)</strong>，爱闹爱笑爱自由，正经的心是什么好吃吗</p>

    <p>这是我为了找工作顺便锻炼写代码时候忙里偷闲建的个人博客。我的脸书主页<a href="https://www.facebook.com/profile.php?id=100010511286014">👉Facebook.Xi</a> 与 Instagram主页<a href="https://www.instagram.com/show_xi.chen/">👉Ins.Xi </a>。</p>

    <p>成为程序猿纯属意外，生活里我喜欢跑跑跳跳喜欢尝试各种体育运动，喜欢旅行，摄影，记录生活里的杂七杂八，精力过于旺盛的楷模典范。</p>

    <p></p>
    
    <h5>大概是要加点儿项目链接我还没做好👇都是别人的我还不会注释掉</h5>

    <ul>
    <li><a href="https://github.com">GitHub</a></li>
    <li><a href="http://jekyll.com.cn/">jekyll</a></li>
    <li><a href="https://pages.github.com/">GitHub Pages</a></li>
    <li><a href="http://huangxuan.me/">Hux</a></li>    </ul>
</div>

<!-- English Version -->
<div class="en post-container">
    <blockquote><p>Yet another iOS Developer. <br>
    Yet another Life-long Student.</p></blockquote>

    <p>Hi, I am <strong>Baiying Qiu</strong>，you can call me <strong>BY</strong>. I am an iOS software engineer and currently working in Xiamen</p>

    <p>This is my personal blog, through making Github Pages and Jekyll.My GitHub  👉 <a href="http://github.com/qiubaiying">Github·BY</a>.</p>
    
    <p>I am a sports enthusiast, I like fitness, running and boxing.</p>

    <h5>Talks</h5>

    <ul>
    <li><a href="https://github.com">GitHub</a></li>
    <li><a href="http://jekyll.com.cn/">jekyll</a></li>
    <li><a href="https://pages.github.com/">GitHub Pages</a></li>
    <li><a href="https://qiubaiying.github.io">BY</a></li>
    </ul>
</div>

<!-- Handle Language Change -->
<script type="text/javascript">
    // get nodes
    var $zh = document.querySelector(".zh");
    var $en = document.querySelector(".en");
    var $en = document.querySelector(".fr");
    var $select = document.querySelector("select");

    // bind hashchange event
    window.addEventListener('hashchange', _render);

    // handle render
    function _render(){
        var _hash = window.location.hash;
        // en
        if(_hash == "#en"){
            $select.selectedIndex = 1;
            $en.style.display = "block";
            $zh.style.display = "none";
        // zh by default
        }else{
            // not trigger onChange, otherwise cause a loop call.
            $select.selectedIndex = 0;
            $zh.style.display = "block";
            $en.style.display = "none";
        }
    }

    // handle select change
    function onLanChange(index){
        if(index == 0){
            window.location.hash = "#zh"
        }else{
            window.location.hash = "#en"
        }
    }

    // init
    _render();
</script>



{% if site.duoshuo_username %}
<!-- 多说评论框 start -->
<div class="comment">
    <!-- This id is used for indexing my loss comments forcedly -->
    <div class="ds-thread"
    {% if site.duoshuo_username == "qiubaiying" %}
        data-thread-id="0ee040117ec56f17aa7e2523d1eae19b"
    {% else %}
    <!-- U can just use this key generated to index comments at page about -->
        data-thread-key="{{site.duoshuo_username}}/about"
    {% endif %}

    data-title="{{page.title}}"
    data-url="{{site.url}}/about/"></div>
</div>
<!-- 多说评论框 end -->

<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
    // dynamic User hacking by Hux
    var _user = '{{site.duoshuo_username}}';

    // duoshuo comment query.
    var duoshuoQuery = {short_name: _user };
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0]
         || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
</script>
<!-- 多说公共JS代码 end -->
{% endif %}


{% if site.disqus_username %}
<!-- disqus 评论框 start -->
<div class="comment">
    <div id="disqus_thread" class="disqus-thread">

    </div>
</div>
<!-- disqus 评论框 end -->

<!-- disqus 公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = "{{site.disqus_username}}";
    var disqus_identifier = "{{site.disqus_username}}/{{page.url}}";
    var disqus_url = "{{site.url}}{{page.url}}";

    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<!-- disqus 公共JS代码 end -->
{% endif %}
