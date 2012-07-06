<form class="form-horizontal" action="top/postcomfilm" name="idea_post">
    <div class="control-group">
        <label for="idea_post-address" class="control-label">タイトル</label>
        <div class="controls">
            <input type="text" value="" name="address" id="idea_post-title"></input>
        </div>
    </div>
    <div class="control-group">
        <label for="idea_post-place" class="control-label">カテゴリ</label>
        <div class="controls">
            <select id="idea_post-category">
                <option value="">----</option>
                <option value="01">ゲームシステム</option>
                <option value="02">業務プロセス</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label for="idea_post-comment" class="control-label">アイデア</label>
        <div class="controls">
            <textarea id="idea_post-body"></textarea>
        </div>
    </div>
    <div class="form-actions">
        <button class="btn btn-primary" type="submit">送信</button>
    </div>
</form>
