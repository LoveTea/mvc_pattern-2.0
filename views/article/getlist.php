<main>
    <div class="articles">
        <? foreach($arg as $data): ?>
        <div class="article">
        <div class="time"><?=date("y.m.d", strtotime($data['time']));?></div>
        <div class="title"><a href="/article/getarticle/<?=$data['id'];?>"><?=$data['title']?></a></div>
        <div class="announce"><?=$data['announce']?></div>
        </div>
        
        <? endforeach; ?>
    </div>
    <ul class="pagination">  
        <? for ($i = 1; $i <= $count; $i++): ?>
        <li class="page-item"><a class="page-link" href='/article/getlist/<?=$i;?>'> <?=$i;?> </a></li>
        <? endfor; ?>
    </ul>
</main>

