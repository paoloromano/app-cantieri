<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\Profile\ProfileIndex;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Card;
use App\Models\Profile;
use App\Models\ProfileDocument;
use App\Models\ProfileImage;
use App\Models\ProfileLink;
use App\Models\ProfileSocialNetwork;
use App\Services\ProfileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{

    protected ProfileService $profileService;

    /**
     * Create a new controller instance.
     * @param ProfileService $profileService
     */
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $profile = $this->profileService->index($request);

        return Inertia::render('Profile/Index', [
            'profile'                 => ProfileIndex::collection($profile),
            'session_rows_per_page' => $request->session()->get('rows_per_page', 10),
        ]);
    }

    public function show(Profile $profile)
    {
        $profile->load(['socialNetworks', 'documents', 'images', 'links']);

        return Inertia::render('Profile/Show', [
            'profile' => new ProfileResource($profile),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return Redirect::back()->with('success', 'Salvato.');
    }

    public function setActiveProfileFE(Request $request, $id)
    {

        $request->validate([
            'profile_id' => 'required|exists:profiles,id',
        ]);

        $card = Card::findOrFail($id);
        $profileId = $request->input('profile_id');

        //Deactive all profiles
        Profile::where('card_id', $id)->update(['active' => 0]);

        $profile = Profile::where('card_id', $id)->where('id', $profileId)->firstOrFail();
        $profile->active = 1;
        $profile->save();

        return redirect()->route('card.show', ['slug' => $card->slug])->with('success', 'Profilo cambiato.');
    }

    public function createProfile(Request $request, $id)
    {

        $profile = Profile::create([
            'card_id' => $id,
            'profile_name' => 'Name',
            'profile_lastname' => 'Lastname',
            'profile_role' => '',
            'profile_title' => '',
            'profile_link_color' => '#26ACBE',
            'profile_button_color' => '#26ACBE',
            'profile_theme_color' => 'light',
            'profile_theme_type' => 'balloon',
            'profile_img_cover_balloon' => 'public/image/0/icon-light-mode.png',
            'profile_img_cover_hero' => 'public/image/0/icon-light-mode.png',
            'profile_company_logo' => 'public/image/0/icon-fallback-logo-backend.png',
            'profile_company_name' => 'Company',
            'profile_company_first_address' => '',
            'profile_company_second_address' => '',
            'profile_company_phone' => '',
            'profile_company_fax' => '',
            'profile_company_email' => '',
            'profile_company_pec' => '',
            'profile_company_sdi' => '',
            'profile_company_vat' => '',
            'profile_company_cf' => '',
            'profile_bio' => '',
            'profile_phone' => '',
            'profile_mobile_phone' => '',
            'profile_email' => '',
            'profile_website' => '',
            'profile_video' => '',
            'active' => 0,
        ]);

        return redirect()->route('cards.edit-content-appearance', ['id' => $id, 'profile_id' => $profile->id]);
    }

    public function duplicateProfile($id)
    {

        $originalProfile = Profile::findOrFail($id);

        if (!$originalProfile) {
            return redirect()->back()->withErrors(['Profile not found']);
        }

        $profile = Profile::create([
            'card_id' => $originalProfile->card_id,
            'profile_name' => $originalProfile->profile_name,
            'profile_lastname' => $originalProfile->profile_lastname,
            'profile_role' => $originalProfile->profile_role,
            'profile_title' => $originalProfile->profile_title,
            'profile_link_color' => $originalProfile->profile_link_color,
            'profile_button_color' => $originalProfile->profile_button_color,
            'profile_theme_color' => $originalProfile->profile_theme_color,
            'profile_theme_type' => $originalProfile->profile_theme_type,
            'profile_img_cover_balloon' => $originalProfile->profile_img_cover_balloon,
            'profile_img_cover_hero' => $originalProfile->profile_img_cover_hero,
            'profile_company_logo' => $originalProfile->profile_company_logo,
            'profile_company_name' => $originalProfile->profile_company_name,
            'profile_company_first_address' => $originalProfile->profile_company_first_address,
            'profile_company_second_address' => $originalProfile->profile_company_second_address,
            'profile_company_phone' => $originalProfile->profile_company_phone,
            'profile_company_fax' => $originalProfile->profile_company_fax,
            'profile_company_email' => $originalProfile->profile_company_email,
            'profile_company_pec' => $originalProfile->profile_company_pec,
            'profile_company_sdi' => $originalProfile->profile_company_sdi,
            'profile_company_vat' => $originalProfile->profile_company_vat,
            'profile_company_cf' => $originalProfile->profile_company_cf,
            'profile_bio' => $originalProfile->profile_bio,
            'profile_phone' => $originalProfile->profile_phone,
            'profile_mobile_phone' => $originalProfile->profile_mobile_phone,
            'profile_email' => $originalProfile->profile_email,
            'profile_website' => $originalProfile->profile_website,
            'profile_video' => $originalProfile->profile_video,
            'active' => 0,
        ]);

        $this->duplicateRelatedData($id, $profile->id);

        return redirect()->route('cards.edit-content-appearance', ['id' => $profile->card_id, 'profile_id' => $profile->id]);
    }

    protected function duplicateRelatedData($originalProfileId, $newProfileId)
    {

        foreach (ProfileDocument::where('profile_id', $originalProfileId)->get() as $document) {
            ProfileDocument::create([
                'profile_id' => $newProfileId,
                'document_name' => $document->document_name,
                'document_path' => $document->document_path,
            ]);
        }

        foreach (ProfileSocialNetwork::where('profile_id', $originalProfileId)->get() as $socialNetwork) {
            ProfileSocialNetwork::create([
                'profile_id' => $newProfileId,
                'social_network_name' => $socialNetwork->social_network_name,
                'social_network_url' => $socialNetwork->social_network_url,
            ]);
        }

        foreach (ProfileLink::where('profile_id', $originalProfileId)->get() as $link) {
            ProfileLink::create([
                'profile_id' => $newProfileId,
                'link_name' => $link->link_name,
                'link_url' => $link->link_url,
            ]);
        }

        foreach (ProfileImage::where('profile_id', $originalProfileId)->get() as $image) {
            ProfileImage::create([
                'profile_id' => $newProfileId,
                'image_name' => $image->image_name,
                'image_path' => $image->image_path,
            ]);
        }
    }

    public function updateActiveProfile(Request $request, $id)
    {

        $request->validate([
            'profile_id' => 'required|exists:profiles,id',
        ]);

        $card = Card::findOrFail($id);
        $profileId = $request->input('profile_id');

        //Deactive all profiles
        Profile::where('card_id', $id)->update(['active' => 0]);

        $profile = Profile::where('card_id', $id)->where('id', $profileId)->firstOrFail();
        $profile->active = 1;
        $profile->save();

        return redirect()->route('cards.edit-active-profile', ['id' => $id])->with('success', 'Profilo attivo aggiornato con successo.');
    }

    public function updateBasicallyInfoProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => 'nullable|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $profile->profile_title = $validatedData['title'];
        $profile->profile_name = $validatedData['name'];
        $profile->profile_lastname = $validatedData['lastname'];
        $profile->profile_role = $validatedData['role'];

        $profile->save();

        return Redirect::back()->with('success', 'Update profile basically info');
    }

    public function updateBioProfile(Request $request, $id)
    {

        $validatedData = $request->validate([
            'profile_bio' => 'nullable|string|max:400',
        ]);

        $profile = Profile::findOrFail($id);
        $profile->profile_bio = $validatedData['profile_bio'];

        $profile->save();

        return Redirect::back()->with('success', 'Updated profile bio');
    }

    public function updateVideoProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'profile_video' => ['nullable', 'string', 'max:255', function($attribute, $value, $fail) {
                if ($value && !preg_match('/^(https?:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/|vimeo\.com\/)([a-zA-Z0-9\-_]+)$/i', $value)) {
                    $fail('The ' . $attribute . ' must be a valid URL from Vimeo or YouTube.');
                }
            }],
        ]);

        $profile = Profile::findOrFail($id);
        $profile->profile_video = $validatedData['profile_video'];

        $profile->save();

        return Redirect::back()->with('success', 'Updated profile video URL');
    }

    public function updateContactsProfile(Request $request, $id)
    {

        $validatedData = $request->validate([
            'profile_phone' => 'nullable|string|max:255',
            'profile_mobile_phone' => 'nullable|string|max:255',
            'profile_email' => 'nullable|string|max:255',
            'profile_website' => 'nullable|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);
        $profile->profile_phone = $validatedData['profile_phone'];
        $profile->profile_mobile_phone = $validatedData['profile_mobile_phone'];
        $profile->profile_email = $validatedData['profile_email'];
        $profile->profile_website = $validatedData['profile_website'];

        $profile->save();

        return Redirect::back()->with('success', 'Updated profile contacts');
    }

    public function updateIsCompanyCollapsed(Request $request, $id)
    {
        $isCompanyCollapsed = $request->input('isCompanyCollapsed');

        $profile = Profile::findOrFail($id);
        $profile->is_company_collapsed = $isCompanyCollapsed;
        $profile->save();

        return back()->with('success', 'Collapsed Company updated');

    }

    public function updateIsBioCollapsed(Request $request, $id)
    {
        $isBioCollapsed = $request->input('isBioCollapsed');

        $profile = Profile::findOrFail($id);
        $profile->is_bio_collapsed = $isBioCollapsed;
        $profile->save();

        return back()->with('success', 'Collapsed Bio updated');

    }

    public function updateIsContactsCollapsed(Request $request, $id)
    {
        $isContactsCollapsed = $request->input('isContactsCollapsed');

        $profile = Profile::findOrFail($id);
        $profile->is_contacts_collapsed = $isContactsCollapsed;
        $profile->save();

        return back()->with('success', 'Collapsed Contacts updated');

    }

    public function updateIsDocumentsCollapsed(Request $request, $id)
    {
        $isDocumentsCollapsed = $request->input('isDocumentsCollapsed');

        $profile = Profile::findOrFail($id);
        $profile->is_documents_collapsed = $isDocumentsCollapsed;
        $profile->save();

        return back()->with('success', 'Collapsed Documents updated');

    }

    public function updateIsVideosCollapsed(Request $request, $id)
    {
        $isVideosCollapsed = $request->input('isVideosCollapsed');

        $profile = Profile::findOrFail($id);
        $profile->is_videos_collapsed = $isVideosCollapsed;
        $profile->save();

        return back()->with('success', 'Collapsed Videos updated');

    }

    public function updateIsImagesCollapsed(Request $request, $id)
    {
        $isImagesCollapsed = $request->input('isImagesCollapsed');
        $profile = Profile::findOrFail($id);
        $profile->is_images_collapsed = $isImagesCollapsed;
        $profile->save();

        return response()->json(['success' => true, 'message' => 'Collapsed state updated'], 200);
    }

    public function updateIsLinksCollapsed(Request $request, $id)
    {
        $isLinksCollapsed = $request->input('isLinksCollapsed');

        $profile = Profile::findOrFail($id);
        $profile->is_links_collapsed = $isLinksCollapsed;
        $profile->save();

        return back()->with('success', 'Collapsed Links updated');

    }

    public function updateCompanyInfoProfile(Request $request, $id)
    {

        $validatedData = $request->validate([
            'profile_company_name' => 'nullable|string|max:255',
            'profile_company_first_address' => 'nullable|string|max:255',
            'profile_company_second_address' => 'nullable|string|max:255',
            'profile_zipcode' => 'nullable|string|max:255',
            'profile_city' => 'nullable|string|max:255',
            'profile_province' => 'nullable|string|max:255',
            'profile_country' => 'nullable|string|max:255',
            'profile_company_phone' => 'nullable|string|max:255',
            'profile_company_fax' => 'nullable|string|max:255',
            'profile_company_email' => 'nullable|string|max:255',
            'profile_company_pec' => 'nullable|string|max:255',
            'profile_company_sdi' => 'nullable|string|max:255',
            'profile_company_vat' => 'nullable|string|max:255',
            'profile_company_cf' => 'nullable|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $profile->profile_company_name = $validatedData['profile_company_name'];
        $profile->profile_company_first_address = $validatedData['profile_company_first_address'];
        $profile->profile_company_second_address = $validatedData['profile_company_second_address'];
        $profile->profile_zipcode = $validatedData['profile_zipcode'];
        $profile->profile_city = $validatedData['profile_city'];
        $profile->profile_province = $validatedData['profile_province'];
        $profile->profile_country = $validatedData['profile_country'];
        $profile->profile_company_phone = $validatedData['profile_company_phone'];
        $profile->profile_company_fax = $validatedData['profile_company_fax'];
        $profile->profile_company_email = $validatedData['profile_company_email'];
        $profile->profile_company_pec = $validatedData['profile_company_pec'];
        $profile->profile_company_sdi = $validatedData['profile_company_sdi'];
        $profile->profile_company_vat = $validatedData['profile_company_vat'];
        $profile->profile_company_cf = $validatedData['profile_company_cf'];

        $profile->save();

        return Redirect::back()->with('success', 'Updated profile company info');
    }

    public function updateAppearanceProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'profile_link_color' => 'required|string|max:255',
            'profile_button_color' => 'required|string|max:255',
            'profile_theme_color' => 'nullable|string|max:255',
            'profile_theme_type' => 'nullable|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $profile->profile_link_color = $validatedData['profile_link_color'];
        $profile->profile_button_color = $validatedData['profile_button_color'];
        $profile->profile_theme_color = $validatedData['profile_theme_color'];
        $profile->profile_theme_type = $validatedData['profile_theme_type'];

        $profile->save();

        return Redirect::back()->with('success', 'Update profile appearance.');
    }

    public function deleteProfile($id){

        $profile = Profile::findOrFail($id);

        $card_id = $profile->card_id;

        $all_profiles = Profile::where('card_id', $card_id)->get();

        if (count($all_profiles) > 1){

            $profile->delete();

            foreach ($profile->documents as $document) {
                Storage::delete($document->document_path);
                $document->delete();
            }

            Storage::deleteDirectory("public/{$id}");

            $all_profiles_updated = Profile::where('card_id', $card_id)->get();

            $new_active_profile = Profile::where('card_id', $card_id)->where('id', $all_profiles_updated[0]->id)->firstOrFail();

            $new_active_profile->active = 1;
            $new_active_profile->save();

            return redirect()->route('cards.edit-content-appearance', ['id' => $card_id])->with('success', 'Profilo attivo aggiornato con successo.');

        }else{
            return Redirect::back()->withErrors('error', 'Card needs at least one profile.');
        }

    }

    public function createDocument(Request $request, $id)
    {
        $request->validate([
            'document_path' => 'required|mimes:pdf|max:20480',
            'document_name' => 'required|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);
        $document = $request->file('document_path');
        $documentName = time() . '_' . $document->getClientOriginalName();
        $path = $document->storeAs("public/{$id}/documents", $documentName);

        $profileDocument = $profile->documents()->create([
            'document_name' => $request->input('document_name'),
            'document_path' => $path,
        ]);

        return Redirect::back()->with('success', 'Create document.');
    }

    public function updateDocument(Request $request, $documentId)
    {
        $request->validate([
            'document_name' => 'required|string|max:255',
        ]);

        $profileDocument = ProfileDocument::findOrFail($documentId);

        if ($profileDocument->document_name !== $request->input('document_name')) {
            $oldPath = $profileDocument->document_path;
            $newDocumentName = $request->input('document_name');
            $newPath = "public/{$profileDocument->profile_id}/documents/" . time() . '_' . $newDocumentName . '.pdf';

            // Rename file in storage
            Storage::move($oldPath, $newPath);

            $profileDocument->update([
                'document_name' => $newDocumentName,
                'document_path' => $newPath,
            ]);
        } else {
            $profileDocument->update([
                'document_name' => $request->input('document_name'),
            ]);
        }

        return Redirect::back()->with('success', 'Updated document');
    }

    public function deleteDocument($documentId)
    {
        $document = ProfileDocument::findOrFail($documentId);

        Storage::delete($document->document_path);

        $document->delete();

        return Redirect::back()->with('success', 'Document deleted successfully');
    }

    public function createSocial(Request $request, $id)
    {

        $validatedData = $request->validate([
            'social_network_name' => 'required|string|max:255',
            'social_network_url' => 'required|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $url = str_replace(' ', '', $validatedData['social_network_url']);

        $profile->socialNetworks()->create([
            'profile_id' => $id,
            'social_network_name' => $validatedData['social_network_name'],
            'social_network_url' => $url,
        ]);

        return Redirect::back()->with('success', 'Created social.');
    }

    public function updateSocial(Request $request, $socialId)
    {
        $validatedData = $request->validate([
            'social_network_name' => 'required|string|max:255',
            'social_network_url' => 'required|string|max:255',
        ]);

        $profileSocial = ProfileSocialNetwork::findOrFail($socialId);

        $url = str_replace(' ', '', $validatedData['social_network_url']);

        $profileSocial->update([
            'social_network_name' => $validatedData['social_network_name'],
            'social_network_url' => $url,
        ]);

        $profileSocial->save();

        return Redirect::back()->with('success', 'Updated document');
    }

    public function deleteSocial($socialId)
    {
        $social = ProfileSocialNetwork::findOrFail($socialId);

        $social->delete();

        return Redirect::back()->with('success', 'Social deleted successfully');
    }

    public function createLink(Request $request, $id)
    {

        $validatedData = $request->validate([
            'link_name' => 'required|string|max:255',
            'link_url' => 'required|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $profile->links()->create([
            'profile_id' => $id,
            'link_name' => $validatedData['link_name'],
            'link_url' => $validatedData['link_url'],
        ]);

        return Redirect::back()->with('success', 'Created link');
    }

    public function updateLink(Request $request, $linkId)
    {
        $validatedData = $request->validate([
            'link_name' => 'required|string|max:255',
            'link_url' => 'required|string|max:255',
        ]);

        $profileLink = ProfileLink::findOrFail($linkId);

        $profileLink->update([
            'link_name' => $validatedData['link_name'],
            'link_url' => $validatedData['link_url'],
        ]);

        $profileLink->save();

        return Redirect::back()->with('success', 'Updated link');
    }

    public function deleteLink($linkId)
    {
        $link = ProfileLink::findOrFail($linkId);

        $link->delete();

        return Redirect::back()->with('success', 'Link deleted successfully');
    }

    public function createImage(Request $request, $id)
    {
        $request->validate([
            'image_path' => 'required|mimes:jpg,jpeg,png,gif|max:65536',
            'image_name' => 'required|string|max:255',
        ]);

        $profile = Profile::findOrFail($id);

        $image = $request->file('image_path');
        $imageName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs("public/{$id}/images", $imageName);

        $profileImage = $profile->images()->create([
            'image_name' => $imageName,
            'image_path' => $path,
        ]);

        //return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));

        return response()->json([
            'success' => true,
            'message' => 'Image loaded successfully',
            'image' => $path,
            'id' => $profileImage->id
        ], 200);
    }

    public function deleteImage($imageId)
    {
        $image = ProfileImage::findOrFail($imageId);

        $profile = Profile::findOrFail($image->profile_id);

        Storage::delete($image->image_path);

        $image->delete();

        //return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));

        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully',
        ], 200);

    }

    public function createLogoImage(Request $request, $id)
    {

        $profile = Profile::findOrFail($id);

        if ($profile->profile_company_logo
            && $profile->profile_company_logo !== 'public/image/0/icon-fallback-logo-backend.png'){
            Storage::delete($profile->profile_company_logo);
        }

        $image = $request->file('profile_company_logo');
        $imageName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs("public/{$id}/company-logo", $imageName);

        $profile->update(['profile_company_logo' => $path]);

        return response()->json([
            'success' => true,
            'message' => 'Logo updated successfully',
            'image' => $path,
        ], 200);

        //return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));
    }

    public function deleteLogoImage($profile_id)
    {

        $profile = Profile::findOrFail($profile_id);

        if ($profile->profile_company_logo !== 'public/image/0/icon-fallback-logo-backend.png'){
            Storage::delete($profile->profile_company_logo);
        }

        $profile->update(['profile_company_logo' => 'public/image/0/icon-fallback-logo-backend.png']);

        #return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));

        return response()->json([
            'success' => true,
            'message' => 'Logo deleted successfully'
        ], 200);

    }

    public function createCoverBalloonImage(Request $request, $id)
    {

        $profile = Profile::findOrFail($id);

        if ($profile->profile_img_cover_balloon
            && $profile->profile_img_cover_balloon !== 'public/image/0/icon-light-mode.png'){
            Storage::delete($profile->profile_img_cover_balloon);
        }

        $image = $request->file('profile_img_cover_balloon');
        $imageName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs("public/{$id}/covers", $imageName);

        $profile->update(['profile_img_cover_balloon' => $path]);

        //return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));

        return response()->json([
            'success' => true,
            'message' => 'Cover image balloon uploaded successfully',
            'image' => $path,
        ], 200);

    }

    public function deleteCoverBalloonImage($profile_id)
    {

        $profile = Profile::findOrFail($profile_id);

        if ($profile->profile_img_cover_balloon !== 'public/image/0/icon-light-mode.png'){
            Storage::delete($profile->profile_img_cover_balloon);
        }

        $profile->update(['profile_img_cover_balloon' => 'public/image/0/icon-light-mode.png']);

        return response()->json([
            'success' => true,
            'message' => 'Cover image balloon deleted successfully'
        ], 200);

    }

    public function createCoverHeroImage(Request $request, $id)
    {

        $profile = Profile::findOrFail($id);

        if ($profile->profile_img_cover_hero
            && $profile->profile_img_cover_hero !== 'public/image/0/icon-light-mode.png'){
            Storage::delete($profile->profile_img_cover_hero);
        }

        $image = $request->file('profile_img_cover_hero');
        $imageName = time() . '_' . uniqid() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs("public/{$id}/covers", $imageName);

        $profile->update(['profile_img_cover_hero' => $path]);

        //return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));

        return response()->json([
            'success' => true,
            'message' => 'Cover image hero uploaded successfully',
            'image' => $path,
        ], 200);

    }

    public function deleteCoverHeroImage($profile_id)
    {

        $profile = Profile::findOrFail($profile_id);

        if ($profile->profile_img_cover_hero !== 'public/image/0/icon-light-mode.png'){
            Storage::delete($profile->profile_img_cover_hero);
        }

        $profile->update(['profile_img_cover_hero' => 'public/image/0/icon-light-mode.png']);

        //return Inertia::location(route('cards.edit-content-appearance', ['id' => $profile->card_id]));

        return response()->json([
            'success' => true,
            'message' => 'Cover image hero deleted successfully',
        ], 200);

    }

}
