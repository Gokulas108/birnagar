<!-- <section style="background: #FFF8EC; padding: 24px 24px; border-top: 1px solid rgba(200,120,30,0.15); border-bottom: 1px solid rgba(200,120,30,0.15);">
    <div style="max-width: 900px; margin: 0 auto; display: flex; align-items: center; gap: 40px; flex-wrap: wrap;">

        {{-- Prabhupada Image --}}
        <div style="flex-shrink: 0; text-align: center;">
            <div style="width: 110px; height: 110px; border-radius: 50%; overflow: hidden; border: 3px solid #C8590A; box-shadow: 0 0 0 6px rgba(200,90,10,0.1); margin: 0 auto 8px;">
                <img
                    src="{{ asset('images/srila_prabhupada.webp') }}"
                    alt="Srila Prabhupada"
                    style="width: 100%; height: 100%; object-fit: cover; object-position: top;"
                />
            </div>
            <p style="font-size: 10px; text-transform: uppercase; letter-spacing: 2px; color: #C8590A; font-weight: 700;">Srila Prabhupada</p>
        </div>

        {{-- Quote --}}
        <div style="flex: 1; min-width: 260px;">
            <div style="width: 32px; height: 2px; background: #C8590A; margin-bottom: 16px;"></div>
            <blockquote style="font-family: 'Georgia', serif; font-size: clamp(15px, 1.8vw, 20px); color: #3B1A08; line-height: 1.75; font-style: italic; margin: 0 0 16px;">
                “I wish that a nice temple be constructed there [In Birnagar] and a well-equipped library and Bhaktivinoda Memorial Hall be established.”
            </blockquote>
            <p style="font-size: 11px; text-transform: uppercase; letter-spacing: 2.5px; color: #C8590A; font-weight: 700; margin: 0;">
                — Srila Prabhupada 
            </p>
        </div>

    </div>
</section> -->

<section style="position:relative; background:#0D4F4F; padding:52px 24px; overflow:hidden;">

    {{-- Diagonal cut — top edge --}}
    <div style="position:absolute; top:-1px; left:0; right:0; height:48px; background:#FDF3E3; clip-path:polygon(0 0, 100% 0, 100% 0%, 0 100%); z-index:2;"></div>

    {{-- Diagonal cut — bottom edge --}}
    <div style="position:absolute; bottom:-1px; left:0; right:0; height:48px; background:#FDF3E3; clip-path:polygon(0 100%, 100% 0, 100% 100%, 0 100%); z-index:2;"></div>

    {{-- Decorative background glow blobs --}}
    <div style="position:absolute; left:-60px; top:50%; transform:translateY(-50%); width:220px; height:220px; border-radius:50%; background:rgba(255,180,40,0.07); z-index:0;"></div>
    <div style="position:absolute; right:-60px; top:50%; transform:translateY(-50%); width:180px; height:180px; border-radius:50%; background:rgba(255,120,20,0.06); z-index:0;"></div>

    {{-- Large faint lotus watermark --}}
    <div style="position:absolute; right:5%; top:50%; transform:translateY(-50%); font-size:120px; opacity:0.04; z-index:0; line-height:1; pointer-events:none;">🪷</div>

    {{-- Content --}}
    <div style="position:relative; z-index:3; max-width:860px; margin:0 auto; display:flex; align-items:center; gap:36px; flex-wrap:wrap;">

        {{-- Prabhupada Image --}}
        <div style="flex-shrink:0; text-align:center;">
            <div style="width:120px; height:120px; border-radius:50%; overflow:hidden; border:2.5px solid #FFD580; box-shadow:0 0 0 5px rgba(255,210,80,0.15), 0 0 24px rgba(255,180,0,0.2); margin:0 auto 8px;">
                <img
                    src="{{ asset('images/srila_prabhupada.webp') }}"
                    alt="Srila Prabhupada"
                    style="width:100%; height:100%; object-fit:cover; object-position:top;" />
            </div>
            <!-- <p style="font-size:9px; text-transform:uppercase; letter-spacing:2px; color:#FFD580; font-weight:700; margin:0;">Srila Prabhupada</p> -->
        </div>

        {{-- Quote --}}
        <div style="flex:1; min-width:240px;">
            <div style="width:28px; height:2px; background:#FFD580; margin-bottom:14px;"></div>
            <blockquote style="font-family:'Georgia',serif; font-size:clamp(13px,1.6vw,17px); color:rgba(255,240,210,0.92); line-height:1.75; font-style:italic; margin:0 0 14px;">
                “I wish that a nice temple be constructed there [In Birnagar] and a well-equipped library and Bhaktivinoda Memorial Hall be established.”
            </blockquote>
            <p style="font-size:10px; text-transform:uppercase; letter-spacing:2.5px; color:#FFD580; font-weight:700; margin:0;">
                ~ Srila Prabhupada
            </p>
            <a href="about/gbc" style="color:#FFD580; font-size:11px;">
                (View GBC Resolution)
            </a>
        </div>
    </div>
</section>