in controller
'nic_or_passport' => 'required', 
        'nic_or_passport.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

'nic_or_passport.*.image' => 'Only image files are allowed.',
    'nic_or_passport.*.mimes' => 'Invalid file type. Allowed types: jpeg, png, jpg, gif, webp.',
    // 'nic_or_passport.*.max' => 'File size must not exceed 2MB.',

in blade file under the input field

 @error('nic_or_passport') 
                                    <label class="error text-danger mt-2">{{ $message }}</label>
                                    @enderror

                                    @error('nic_or_passport.*')
                                    <label class="error text-danger mt-2">{{ $message }}</label>
                                    @enderror
