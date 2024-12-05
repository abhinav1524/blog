<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get(); // Retrieve posts with their category
        return view('posts.index', compact('posts'));
    }
    
    public function show_post(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    
    // Method to show the form for creating a new post
    public function create_post()
    {
        // Optionally, pass categories to the view if you want to display them in the form
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }
    
    // Method to handle the form submission for creating a new post
    public function store_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }
    
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Post::generateSlug($request->title),
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    
    // Method to show the form for editing an existing post
    public function edit_post(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }
    
    // Method to handle updating an existing post
    public function update_post(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imagePath = $post->image;
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $imagePath = $request->file('image')->store('posts', 'public');
        }
    
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Post::generateSlug($request->title),
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
    
    // Method to handle deleting a post
    public function delete_post(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
    
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
