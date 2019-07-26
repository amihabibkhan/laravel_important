// delete category and all post under this category will be uncategorized

public function destroy($id)
{
    Post::where('category_id', $id)->update([
       'category_id' => 1
    ]);
    Category::findOrFail($id)->delete();
    Toastr::success("Category Deleted Successfully", "Success");
    return back();
}
