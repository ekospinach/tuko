<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>{{ __($module.'field.name.label') }}</th>
            <th>{{ __($module.'field.description.label') }}</th>
            <th>{{ __($module.'field.slug.label') }}</th>
            <th>Post</th>
        </tr>
    </thead>
    <tbody>
@if ($categories)
    @foreach ($categories as $cat)
        <tr>
            <td>{{ $cat->id == '1' ? $cat->name : HTML::link('/admin/categories/'.$cat->id,$cat->name) }}</td>
            <td>{{ $cat->description }}</td>
            <td>{{ $cat->slug }}</td>
            <td>{{ $cat->count }}</td>
        </tr>
    @endforeach
@else
        <tr>
            <td colspan="4" class="alert">&nbsp;</td>
        </tr>
@endif
    </tbody>
</table>

<div class="alert alert-info">
    <strong>Note:</strong> <br />
    Deleting a category does not delete the posts in that category. Instead, posts that were only assigned to the deleted category are set to the category Uncategorized. <br /> <br />
    Categories can be selectively converted to tags using the category to tag converter.

</div>