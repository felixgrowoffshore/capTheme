<form action="" class="search-form">
  <div class="row">
    <div class="col-md-5 col-sm-7">
      <div class="controls">
        <input type="text" class="form-control" placeholder="Enter search terms here">
      </div>
    </div>
    <div class="col-md-6 col-sm-5">
      <div class="controls">
        <button type="submit" class="btn btn-primary btn-lg">Search</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p class="advance-search"><a href="#" data-toggle="collapse" data-target="#more_search_filter">Advance Search</a></p>
    </div>
  </div>

  <div id="more_search_filter" class="collapse">
    <div class="row">
      <div class="col-md-12">
        <h3>What does collection relate to?</h4>
        <div class="checkbox-inline">
          <label><input type="checkbox" value="courts" name="collection-relate">Courts</label>
        </div>
        <div class="checkbox-inline">
          <label><input type="checkbox" value="police" name="collection-relate">Police</label>
        </div>
        <div class="checkbox-inline">
          <label><input type="checkbox" value="prisons" name="collection-relate">Prisons</label>
        </div>
      </div>

      <div class="col-md-12">
        <h3>Categories</h4>
          <div class="row"><div class="col-md-4">
            <div class="form-group">
              <select class="form-control">
                <option value="" selected multiple>Select ALL that apply</option>
              </select>
            </div>
          </div></div>
      </div>

      <div class="col-md-12">
        <h3>What time period?</h4>
        <div class="checkbox-inline">
          <label><input type="checkbox" value="pre-1700" name="time-period">Pre-1700</label>
        </div>

        <div class="checkbox-inline">
          <label><input type="checkbox" value="1700-1799" name="time-period">1700-1799</label>
        </div>

        <div class="checkbox-inline">
          <label><input type="checkbox" value="1800-1849" name="time-period">1800-1849</label>
        </div>
      </div>

      <div class="col-md-12 block_space">
        <h3>Collection contains</h4>
        <div class="checkbox-inline">
          <label><input type="checkbox" value="pre-1700" name="time-period">Artwork</label>
        </div>

        <div class="checkbox-inline">
          <label><input type="checkbox" value="1700-1799" name="time-period">Documents</label>
        </div>

        <div class="checkbox-inline">
          <label><input type="checkbox" value="1800-1849" name="time-period">Photographs</label>
        </div>

        <div class="checkbox-inline">
          <label><input type="checkbox" value="1800-1849" name="time-period">Books, journals, magazines</label>
        </div>
      </div>

      <div class="col-md-12">
        <div class="controls">
          <button type="submit" class="btn btn-primary btn-lg">Search</button>
        </div>
      </div>
    </div>
  </div>


</form>
