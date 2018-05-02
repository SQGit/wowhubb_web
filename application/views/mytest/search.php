
<link rel="stylesheet" href="<?php echo base_url ('assets/css/select2.min.css')?>" />

 <select id="select-client" class="form-control" style="width: 350px;">
                            
</select>

<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/select2.min.js')?>"></script> 
<script>

// select search option
var base_url = '<?php echo base_url() ?>';

var studentSelect = $('#select-client');

var data=[{
firstname:"chirag patel",
id:"patel"
},{
firstname:"patel",
id:"patel1"
}]

for(var i=0;i<data.length;i++){
var option = new Option(data[i].firstname, data[i].id, true, true);
studentSelect.append(option).trigger('change');
}

// manually trigger the `select2:select` event
studentSelect.trigger({
  type: 'select2:select',
  params: {
    data: data
  }
});


function formatRepo (repo) {

return repo.firstname;
  }

  function formatRepoSelection (repo) {
    console.log(repo.text);
    return repo.firstname || repo.text;
  }

$("#select-client").select2({
  multiple:true,
  ajax: {
    url: base_url+'searchfriends/search_friends/',
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        q: params.term
      };
    },
    processResults: function (data) {

      return {
        results: data.message
      };
    },
    cache: true
  },
  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  minimumInputLength: 1,
  templateResult: formatRepo, // omitted for brevity, see the source of this page
  templateSelection: formatRepoSelection, // omitted for brevity, see the source of this page
  placeholder: "Enter name"
});

</script>