<!-- <div class="table-responsive"> -->
  <table id="servers" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Client</th>
      </tr>
    </thead>
    <tbody>
      <script id="template" type="x-tmpl-mustache">        
        {{#servers}}
        <tr>
          <td><span class="label label-success">{{name}}</span></td>
          <td>{{ip}}</td>
          <td>{{client}}</td>
        </tr>
        {{/servers}}
      </script>

    </tbody>
  </table>

  <script>
    $.getJSON("list.json",function(ret){
      var template = $('#template').html();
      //Mustache.parse(template);
      var rendered = Mustache.render(template, ret);
      $('#servers').html(rendered);
      }).done(function(a, b, c) {
      //  console.log( "success", a, b, c );
      // })
    //.fail(function(a, b, c) {
      //  console.log( "error", a, b, c );
    });
  </script>

  <!-- </div> -->
