<a href="{{ route($crud . '.show', $row) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>
<a href="{{ route($crud . '.edit', $row) }}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
<form action="{{ route($crud . '.destroy', $row) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');" style="display: inline-block;">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" style="color:white;"><i class="fa fa-trash"></i></button>
</form>
