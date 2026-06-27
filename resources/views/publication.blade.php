<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <link rel="shortcut icon" href="/img/icon_site.png">
  <title>Latest Medical Updates</title>
  {{-- <link rel="stylesheet" href="/css/publication.css"> --}}
</head>
<style>
    :root{
  --accent1:#045d61;
  --accent2:#028259;
  --soft:#f6f9ff;
  --muted:#6b7280;
  --card-bg: #ffffff;
  --radius: 14px;
  --glass: rgba(255,255,255,0.6);
  --shadow: 0 12px 30px rgba(16,24,40,0.08);
  font-size: 16px;
}
*{box-sizing:border-box}
body{
  height: 100vh;
  margin:0;
  font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  background: linear-gradient(180deg, #f4f8ff 0%, #ffffff 100%);
  color:#111827;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
}

/* layout */
.container{width:min(1180px,100%) ;margin:0 auto;padding:28px 0}

/* hero */
.pub-hero{
  background: linear-gradient(135deg,var(--accent1),var(--accent2));
  color:white;
  padding:48px 0;
  border-bottom-left-radius:20px;
  border-bottom-right-radius:20px;
  box-shadow: 0 8px 40px rgba(43,135,255,0.15);
}
.pub-hero .container{display:flex;flex-direction:column;gap:10px}
.pub-hero h1{font-size:clamp(1.6rem,3.4vw,2.6rem);margin:0;font-weight:700;letter-spacing:-0.02em}
.pub-hero .lead{opacity:0.94;color:#f0f7ff;max-width:900px}

/* publication list */
.pub-list{display:grid;grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:22px;margin-top:22px;padding-bottom:60px}
.pub-card{
  background:var(--card-bg);
  border-radius:var(--radius);
  overflow:hidden;
  display:flex;
  gap:18px;
  align-items:flex-start;
  padding:18px;
  box-shadow:var(--shadow);
  transition:transform .25s ease, box-shadow .25s ease;
}
.pub-card:hover{ transform: translateY(-8px); box-shadow: 0 20px 45px rgba(16,24,40,0.12) }

.pub-thumb{flex:0 0 110px;height:110px;border-radius:10px;overflow:hidden;background:var(--soft);display:flex;align-items:center;justify-content:center}
.pub-thumb img{width:100%;height:100%;object-fit:cover}

/* body */
.pub-body{flex:1;min-width:0}
.meta{display:flex;gap:12px;align-items:center;font-size:.86rem;color:var(--muted)}
.title{font-size:17px;margin:6px 0 8px;color:#0f172a;line-height:1.2}
.excerpt{color:#374151;font-size:.96rem;line-height:1.6}

/* actions */
.actions{margin-top:12px;display:flex;gap:10px;align-items:center}
.btn-more, .btn-link{
  background:transparent;border:1px solid rgba(15,23,42,0.08);padding:8px 12px;border-radius:10px;font-weight:600;color:var(--accent1);cursor:pointer;text-decoration:none;
  transition:all .18s ease;
}
.btn-more:hover, .btn-link:hover{transform:translateY(-3px);box-shadow:0 8px 20px rgba(43,135,255,0.08)}
.btn-link{background:linear-gradient(90deg,var(--accent1),var(--accent2));color:white;border:0}

/* full expanded panel (hidden by default) */
.pub-full{
  display:none;
  margin-top:14px;
  padding:16px;
  border-radius:10px;
  background: linear-gradient(180deg, rgba(43,135,255,0.04), rgba(0,195,255,0.03));
  border:1px solid rgba(43,135,255,0.06);
}
.btn-close{margin-top:12px;background:#fff;border:1px solid rgba(0,0,0,0.06);padding:8px 12px;border-radius:8px;cursor:pointer}

/* empty state */
.empty{padding:40px;text-align:center;color:var(--muted);font-weight:600;border-radius:12px;background:linear-gradient(90deg,#fff,#fbfdff);box-shadow:var(--shadow)}

/* footer */
.pub-footer{padding:28px 0;color:var(--muted);text-align:center}

/* responsive */
@media (max-width:720px){
  .pub-card{flex-direction:row;gap:12px;padding:12px}
  .pub-thumb{flex-basis:90px;height:90px}
}
</style>
<body>
  <header class="pub-hero">
    <div class="container">
      <h1>Latest Medical Information</h1>
      <p class="lead">Recent clinical notes, advice and updates from your care team — organized for you.</p>
    </div>
  </header>

  <main class="container">
    <section class="pub-list">
      @forelse($publications as $pub)
        <article class="pub-card">
          <div class="pub-thumb">

<img src="data:image/jpeg;base64,{{ base64_encode($pub->image_path) }}" alt="thumb">
        </div>
          <div class="pub-body">
            <div class="meta">
              <span class="date">{{$pub->date}}</span>
              @if(isset($pub->author))
                <span class="author">by Dr. {{$pub->author}}</span>
              @endif
            </div>
            <h5 class="title">{{$pub->subject}}</h5>
            <p class="excerpt">{{$pub->summery}}</p>
            <div class="actions">
              <button class="btn-more" >Read more</button>
              <a href="" class="btn-link">Open full</a>
            </div>
            <div id="" class="pub-full" aria-hidden="true">
      
              <button class="btn-close">Close</button>
            </div>
          </div>
        </article>
    @empty
        <div class="empty">No publications yet. Please check back later.</div>
      @endforelse
    </section>
  </main>

  <footer class="pub-footer">
    <div class="container">© {{ date('Y') }} OurHealth</div>
  </footer>

<script>
  document.querySelectorAll('.btn-more').forEach(btn=>{
    btn.addEventListener('click', e=>{
      const id = e.currentTarget.dataset.id;
      const el = document.getElementById(id);
      if(!el) return;
      el.style.display = 'block';
      el.setAttribute('aria-hidden','false');
      el.scrollIntoView({behavior:'smooth', block:'center'});
    });
  });
  document.querySelectorAll('.btn-close').forEach(btn=>{
    btn.addEventListener('click', e=>{
      const id = e.currentTarget.dataset.id;
      const el = document.getElementById(id);
      if(!el) return;
      el.style.display = 'none';
      el.setAttribute('aria-hidden','true');
    });
  });
</script>
</body>
</html>