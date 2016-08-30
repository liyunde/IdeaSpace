<?php
foreach ($contentlist as $key => $value) {
?>

<a class="anchor" id="{{ $key }}"></a>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $value['label'] }}</h3>
  </div>
  <div class="panel-body">
      <button type="button" class="btn btn-primary space-add-content" data-contenttype-key="{{ $key }}">{{ trans('template_contentlist.add') }} {{ $value['label'] }}</button>
      <span class="pull-right" style="margin-top:10px">{{ $value['description'] }}</span>

        <?php
        if (isset($value['content'])) {
        ?>
        <div class="table-responsive" style="border:none">
            <table style="margin-top:20px" class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:5%"></th>
                        <th style="width:75%">{{ trans('template_contentlist.title') }}</th>
                        <th style="width:20%">{{ trans('template_contentlist.date') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($value['content'] as $content) {
                    ?>
                    <tr>
                        <td class="field-drag">
                          <i class="fa fa-arrows" aria-hidden="true"></i>
                          <input type="hidden" name="id" class="id" value="{{ $content['id'] }}">
                          <input type="hidden" name="weight" class="weight" value="{{ $content['weight'] }}">
                        </td>
                        <td class="field-title">
                            <div><a style="font-weight:bold;word-wrap:break-word;" href="#" class="title">{{ $content['title'] }}</a></div>
                            <div>
                                <span class="field-actions"><a style="font-size:14px" href="{{ route('content_edit', ['space_id' => $space->id, 'contenttype' => $key, 'content_id' => $content['id']]) }}">{{ trans('template_contentlist.edit') }}</a> <span style="font-size:14px;color:#999999">|</span> <a href="{{ route('content_delete', ['space_id' => $space->id, 'contenttype' => $key, 'content_id' => $content['id']]) }}" style="font-size:14px;color:#c9302c;">{{ trans('template_contentlist.delete') }}</a></span>
                            </div>
                        </td>
                        <td>{{ $content['updated_at'] }}<br>&nbsp;</td>
                    </tr>
                    <?php
                        } /* foreach */
                    ?>
                </tbody>
            </table>
        </div>
        <?php
        } /* isset */
        ?>

  </div>
</div>

<?php
} /* contentlist */
?>
