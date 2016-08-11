@if ($form['#type'] == App\Content\ContentType::FIELD_TYPE_IMAGE)
<button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library.add_image') }}</button>
@elseif ($form['#type'] == App\Content\ContentType::FIELD_TYPE_AUDIO)
<button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library.add_audio') }}</button>
@elseif ($form['#type'] == App\Content\ContentType::FIELD_TYPE_VIDEO)
<button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library.add_video') }}</button>
@elseif ($form['#type'] == App\Content\ContentType::FIELD_TYPE_VIDEOSPHERE)
<button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library.add_videosphere') }}</button>
@elseif ($form['#type'] == App\Content\ContentType::FIELD_TYPE_PHOTOSPHERE)
<button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library.add_photosphere') }}</button>
@elseif ($form['#type'] == App\Content\ContentType::FIELD_TYPE_MODEL)
<button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> {{ trans('template_asset_library.add_model') }}</button>
@endif