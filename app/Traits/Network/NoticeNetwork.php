<?php

namespace App\Traits\Network;

use App\Models\Designation;
use App\Models\Notice;
use Illuminate\Support\Facades\Auth;
use Image;

trait NoticeNetwork
{
    /* display a resouce list */
    public function NoticeList()
    {
        return Notice::latest()->get();
    }

    /* store a newly resource*/
    public function ResourceStoreNotice($request, $notice= null)
    {
        if ($request->hasFile('image')) {
            $image = Image::make($request->file('image'));
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/notice/');
            $image->save($destinationPath . $imageName);
        } else {
            $imageName = $notice->image;
        }

        return array(
            'image' => $imageName,
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
        );
    }

    /* store resource */
    public function NoticeStore($request)
    {
        return Notice::create($this->ResourceStoreNotice($request));
    }

    /* single resource show */
    public function NoticeFindById($notice_id)
    {
        return Notice::find($notice_id);
    }

    /* resource update */
    public function NoticeUpdate($request, $id)
    {
        $notice = Notice::find($id);
        return $notice->update($this->ResourceStoreNotice($request, $notice));
    }
}