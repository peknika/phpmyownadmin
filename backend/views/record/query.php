
<div class="container">
    <h2>Your Postgress Query</h2>
    <form action="/record/query-create" method="get" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="query">Query:</label>
            <div class="col-sm-10">
                <textarea type="textarea" class="form-control" id="query_body" name="query_body"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="name" class="form-control" id="query_name" name="query_name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" name="save"> Save</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
