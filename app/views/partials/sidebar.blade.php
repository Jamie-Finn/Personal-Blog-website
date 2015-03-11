
      
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

          <div class="well text-center">
            <h4>Find me on Twitter!</h4>
            <hr/>
              <div class="row">
                <div class="col-lg-12">
                  <a href="https://twitter.com/jays_blog"><i class="largeIcon fa fa-twitter"></i></a>
                </div>                   
              </div>
          </div>
          
          <!-- /well -->
          <div class="well">
            <h4>--Blog Info--</h4>
            <hr/>
            <p>My blog mainly contains articles about my random thoughts, sports, video games and the Web.</p>
          </div><!-- /well -->
          
          <a href="http://www.phptherightway.com">
            <img src="http://www.phptherightway.com/images/banners/lg-rect-386x280.png" width="360" height="254" alt="PHP: The Right Way"/>
          </a> 
      </div>
    </div>





      
  
      
