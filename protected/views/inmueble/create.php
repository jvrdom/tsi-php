<div class="row">
  <div class="col-md-7">
      <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
  <div class="col-md-5">
       <!--   <?php
              $this->widget(
              'booster.widgets.TbMenu',
                  array(
                  'type' => 'list',
                  'items' => array(
                      array(
                          'label' => 'List Inmueble',
                          'url' =>  array('index'),
                          'itemOptions' => array('class' => 'active')
                      ),
                      array('label' => 'Manage User', 'url' => array('admin')),
                      )
                  )
          );
          ?>-->
      <div id="map-canvas" style="height:400px;"></div>
      <div>
         <button class="btn btn-success pull-right btn-modal" data-toggle="modal" data-target=".bs-example-modal-lg">
             <i class="glyphicon glyphicon-camera"></i>
             Ingresar Imágenes
         </button>
      </div>
   </div>
   <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <form id="fileupload" enctype="multipart/form-data">
                  <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
                  <div id="fileupload" class="row fileupload-buttonbar">
                      <div class="col-lg-7">
                          <!-- The fileinput-button span is used to style the file input field as button -->
                          <span class="btn btn-success fileinput-button">
                              <i class="glyphicon glyphicon-plus"></i>
                              <span>Add files...</span>
                              <input type="file" name="files[]" multiple>
                          </span>
                          <button type="submit" class="btn btn-primary start">
                              <i class="glyphicon glyphicon-upload"></i>
                              <span>Start upload</span>
                          </button>
                          <button type="reset" class="btn btn-warning cancel">
                              <i class="glyphicon glyphicon-ban-circle"></i>
                              <span>Cancel upload</span>
                          </button>
                          <button type="button" class="btn btn-danger delete">
                              <i class="glyphicon glyphicon-trash"></i>
                              <span>Delete</span>
                          </button>
                          <input type="checkbox" class="toggle">
                          <!-- The global file processing state -->
                          <span class="fileupload-process"></span>
                      </div>
                      <!-- The global progress state -->
                      <div class="col-lg-5 fileupload-progress fade">
                          <!-- The global progress bar -->
                          <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                          </div>
                          <!-- The extended global progress state -->
                          <div class="progress-extended">&nbsp;</div>
                      </div>
                  </div>
                  <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
              </form>
              <script id="template-upload" type="text/x-tmpl">
                  {% for (var i=0, file; file=o.files[i]; i++) { %}
                      <tr class="template-upload fade">
                          <td>
                              <span class="preview"></span>
                          </td>
                          <td>
                              <p class="name">{%=file.name%}</p>
                              <strong class="error text-danger"></strong>
                          </td>
                          <td>
                              <p class="size">Processing...</p>
                              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                          </td>
                          <td>
                              {% if (!i && !o.options.autoUpload) { %}
                                  <button class="btn btn-primary start" disabled>
                                      <i class="glyphicon glyphicon-upload"></i>
                                      <span>Start</span>
                                  </button>
                              {% } %}
                              {% if (!i) { %}
                                  <button class="btn btn-warning cancel">
                                      <i class="glyphicon glyphicon-ban-circle"></i>
                                      <span>Cancel</span>
                                  </button>
                              {% } %}
                          </td>
                      </tr>
                  {% } %}
              </script>
              <!-- The template to display files available for download -->
              <script id="template-download" type="text/x-tmpl">
                  {% for (var i=0, file; file=o.files[i]; i++) { %}
                      <tr class="template-download fade">
                          <td>
                              <span class="preview">
                                  {% if (file.thumbnailUrl) { %}
                                      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                                  {% } %}
                              </span>
                          </td>
                          <td>
                              <p class="name">
                                  {% if (file.url) { %}
                                      <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                                  {% } else { %}
                                      <span>{%=file.name%}</span>
                                  {% } %}
                              </p>
                              {% if (file.error) { %}
                                  <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                              {% } %}
                          </td>
                          <td>
                              <span class="size">{%=o.formatFileSize(file.size)%}</span>
                          </td>
                          <td>
                              {% if (file.deleteUrl) { %}
                                  <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                                      <i class="glyphicon glyphicon-trash"></i>
                                      <span>Delete</span>
                                  </button>
                                  <input type="checkbox" name="delete" value="1" class="toggle">
                              {% } else { %}
                                  <button class="btn btn-warning cancel">
                                      <i class="glyphicon glyphicon-ban-circle"></i>
                                      <span>Cancel</span>
                                  </button>
                              {% } %}
                          </td>
                      </tr>
                  {% } %}
              </script>
           </div>
           <div class="modal-footer">
            <p>Prueba</p>
           </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBDun4Glg2ymc4wiMNbzPXsCAlrEYJhwRA&sensor=true"></script>
<?php  
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/gmaps.js', CClientScript::POS_END);
?>
