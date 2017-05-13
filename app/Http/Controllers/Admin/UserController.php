<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\Subject;
use App\Models\Test;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserAddRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Auth;
use File;

class UserController extends Controller
{
    public function getUserAdd()
    {
        return view('admin.module.user.add');
    }

    public function postUserAdd(UserAddRequest $request)
    {
        $user = new User;
        $file = $request->file('avaImg');
        $user->name = $request->txtUser;
        $user->email = $request->txtEmail;
        $user->password = bcrypt($request->txtPass);
        $user->level = $request->rdoLevel;

        if (strlen($file) > 0) {
            $filename = time() . '-' . Auth::user()->id . '-' . $file->getClientOriginalName();
            $destinationPath = 'uploads/avatars/';
            $file->move($destinationPath, $filename);
            $user->image = $filename;
        }

        $user->created_at = new DateTime();
        $user->save();
        return redirect()->route('getUserList')->with(['flash_level' => 'result_msg', 'flash_message' => 'Thêm thành viên thành công']);
    }

    public function getUserList()
    {
        $data = User::select('id', 'name', 'email', 'level')->get()->toArray();
        return view('admin.module.user.list', ['userData' => $data]);
    }

    public function getUserDel($id)
    {
        $user_current_login = Auth::user()->id;
        $user_delete = User::find($id);
        if (($id == 1) || ($user_current_login != 1 && $user_delete['level'] == 1)) {
            return redirect()->route('getUserList')->with(['flash_level' => 'error_msg', 'flash_message' => 'Bạn không được phép xóa người dùng này']);
        } else {
            $subjectsData = Subject::select('id', 'user_id')->where('user_id', $id)->get()->toArray();
            $testsData = Test::select('id', 'user_id')->where('user_id', $id)->get()->toArray();
            $questionsData = Question::select('id', 'user_id')->where('user_id', $id)->get()->toArray();
            // Doan code nay dung de cap nhat khoa ngoai user_id
            foreach ($subjectsData as $item) {
                $subject = Subject::find($item['id']);
                $subject->user_id = 1;
                $subject->save();
            }

            foreach ($testsData as $item) {
                $tests = Test::find($item['id']);
                $tests->user_id = 1;
                $tests->save();
            }

            foreach ($questionsData as $item) {
                $question = Question::find($item['id']);
                $question->user_id = 1;
                $question->save();
            }

            if (file_exists('uploads/avatars/' . $user_delete->image)) {
                File::delete('uploads/avatars/' . $user_delete->image);
            }
            $user_delete->delete($id);
            return redirect()->route('getUserList')->with(['flash_level' => 'result_msg', 'flash_message' => 'Xóa người dùng thành công']);
        }
    }

    public function getUserEdit($id)
    {
        $data = User::findOrFail($id)->toArray();
        if ((Auth::user()->id != 1) && ($id == 1 || $data['level'] == 1 && Auth::user()->id != $id)) {
            return redirect()->route('getUserList')->with(['flash_level' => 'error_msg', 'flash_message' => 'Bạn không được phép sửa người dùng này']);
        }
        return view('admin.module.user.edit', ['userData' => $data]);
    }

    public function postUserEdit(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->txtPass) {
            $this->validate($request,
                [
                    'txtRepass' => 'same:txtPass'
                ],
                [
                    'txtPass.required' => 'Confirm password không khớp'
                ]
            );
            $user->password = bcrypt($request->txtPass);
        }
        $file = $request->file('avaImg');
        if (strlen($file) > 0) {
            $fImageCurrent = $request->fImageCurrent;
            if (file_exists('uploads/avatars/' . $fImageCurrent)) {
                File::delete('uploads/avatars/' . $fImageCurrent);
            }

            $filename = time() . '-' . Auth::user()->id . '-' . $file->getClientOriginalName();
            $destinationPath = 'uploads/avatars/';
            $file->move($destinationPath, $filename);
            $user->image = $filename;
            echo $filename;
        }
        $user->level = $request->rdoLevel;
        $user->updated_at = new DateTime();
        $user->save();
        return redirect()->route('getUserList')->with(['flash_level' => 'result_msg', 'flash_message' => 'Cập nhật thành viên thành công']);
    }
}
