<div>
  <img class="img-responsive" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/saverx-banner.jpg" style="width:500px;height:600px;"/>
  <!--
    <h1>Hero Image</h1>
    <h2>This is a simple hero unit, a simple jumbotron-style component for calling extra 7
    attention to featured content or information.</h2>
    <p><a class="btn btn-primary btn-large">Learn more</a></p>
    -->
</div>
<div class="col-md-12 breathing-space">
  <div class="row">
    <div class="col-md-offset-1 col-md-2">
      <img src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/saver-logo.png" width="100%"/>
      <hr/>
      <a href="{{ URL::to('/') }}/login">
        <h4>Login</h4>
      </a>
      <hr/>
      <a href="{{ URL::to('/') }}/create">
        <h4>Register</h4>
      </a>
      <hr/>
    </div>
    <div class="col-md-offset-1 col-md-8 scigap-info">
      <h1>Saver-X Gateway</h1>
      <p style="color:#cccccc;">
      <h2>Welcome!</h2>
      </p>
      <hr/>
      <!-- <button class="btn btn-primary btn-lg">Accelerate Research</button> -->
      <p style="font-size:14px; margin-top:20px;">
        In most single cell transcriptomics (scRNA-seq) studies, the data are extremely sparse and noisy, hindering downstream analyses.
        To address this problem, we have developed Single-cell Analysis Via Expression Recovery via harnessing external data (SAVER-X),
        a method for gene expression denoising and imputation.
      </p>
      <div class="col-md-6 credits">
        <div class="thumbnail" style="border:none">
          <img class="img-responsive" src="assets/scigap-header-logo.png" alt="SciGaP">
          <div class="caption">
            <p>
              SciGaP is a hosted service with a public API that science gateways can use to manage
              applications and workflows running on remote supercomputers, as well as other services. Gateway
              developers can thus concentrate their efforts on building their scientific communities and not
              worry about operations.
            </p>
            <p>
              Science Gateway Platform as a Service (SciGaP) provides application programmer interfaces (APIs)
              to hosted generic infrastructure services that can be used by domain science communities to
              create Science Gateways.
            </p>
            <p><a href="http://scigap.org/"
              target="_blank">Learn more <span class="glyphicon glyphicon-new-window"></span></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 credits">
        <div class="thumbnail" style="border:none">
          <img src="assets/powered-by-airavata-transparent.png" width="260px" alt="Apache Airavata">
          <div class="caption">
            <p>
              Apache Airavata is a software framework which is dominantly used to build Web-based science
              gateways and assist to compose, manage, execute and monitor large scale applications and
              workflows on distributed computing resources such as local clusters, supercomputers, national
              grids, academic and commercial clouds. Airavata mainly supports long running applications and
              workflows on distributed computational resources.
            </p>
            <p><a href="http://airavata.apache.org/" target="_blank">Learn more <span
              class="glyphicon glyphicon-new-window"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
