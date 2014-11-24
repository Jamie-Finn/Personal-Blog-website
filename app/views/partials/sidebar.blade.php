
      
      <div id="sideBar" class="col-lg-4">
          <div class="well">
            <h4>Blog Search</h4>
            {{ Form::open(array('url' => 'search')) }}
            <div class="input-group">
              {{Form::text('search', '', array('class' => 'form-control'))}}
              <span class="input-group-btn">
              {{ Form::submit('Search', array('class' => 'btn btn-default'))}}
              </span>
            {{ Form::close()}}
            </div><!-- /input-group -->
          </div><!-- /well -->
           
                
          <div class="well">
            <h4>Search</h4>
            <hr/>
              <div class="row">
                <div class="col-lg-12">
                <p>Don't forget to use the search bar above to find a particular post! &middot; It is available on all pages for efficient search.</p>
                </div>                   
              </div>
          </div>
          
          <!-- /well -->
          <div class="well">
            <h4>--Blog Info--</h4>
            <hr/>
            <p>My blog mainly contains articles about my random thoughts, sports, video games and the Web.</p>
          </div><!-- /well -->
      </div>
    </div>





      
  
      
