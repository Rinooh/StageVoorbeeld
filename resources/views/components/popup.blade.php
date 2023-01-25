<div class="modal-cod">
  <div class="content">
    <div class="inner">
        <?php use Illuminate\Support\Facades\DB;
            $results = DB::select('SELECT * FROM mededelingen_instructeur ORDER BY id_mededeling DESC LIMIT 1'); 
        ?>
        <p><?php echo $results[0]->mededeling ?></p>
    </div>
    <div class="close">✕</div>
  </div>
</div>