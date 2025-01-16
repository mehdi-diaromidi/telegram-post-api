![image_0](https://github.com/user-attachments/assets/b10789dc-2bf3-4038-8bdc-d70fc0ed6663)
---

### 🚀 Telegram Post API Plugin

A cool plugin that sends your WordPress site posts directly to a Telegram channel! 😎  
No more worries about copy-pasting; this plugin makes it easy and saves you time. 🎉

---

#### ❓ What Does This Plugin Do?

This plugin sends your posts, including text, preview image, and full link, to a Telegram channel. 📝📤  
It features simple and user-friendly settings in WordPress, where you can easily set your bot token and channel ID. ⚙️

---

#### ✨ Features of This Plugin:

- Automatically sends the post link, text, and featured image to your Telegram channel.
- Simple and lightweight to use (no complicated settings required).
- Displays success or error messages with beautiful styles (SweetAlert2). 🎨
- Free and extendable for professional developers. 💻
- Supports HTML formatting and multi-language posts.

---

#### 💻 Installation and Activation:

1. Download the plugin ZIP file from the releases page on GitHub.
2. Go to your WordPress dashboard, navigate to Plugins > Add New.
3. Upload and install the plugin ZIP file.
4. Activate the plugin and go to Settings > Send to Telegram to enter the required settings (Bot Token and Channel ID).

---

#### ✏️ How to Use This Plugin:

- **Setting Up the Plugin:**  
  Go to the settings page and enter the following information:
  - **Telegram Bot Token:** Create a bot in Telegram using BotFather and get your bot token. 🤖
  - **Telegram Channel ID:** Enter the channel ID where your bot is an admin. 👈

- **When a New Post is Published:**  
  As soon as a post is published, its text and image are sent to the Telegram channel. 📡

---

#### 🖼️ Images of Settings and Plugin Output:
- **Settings Panel:**  
  This is where you configure the plugin, entering your Bot Token and Channel ID.

- **Telegram Output Example:**  
  This shows how the post will appear in your Telegram channel.

---

#### 🔧 Requirements:

- **WordPress Version:** 5.2 or higher.
- **PHP Version:** 7.4 or higher.
- **Server Location:** Your server should be hosted outside of Iran to ensure proper functionality with Telegram. 🚀

---

#### 🛠️ For Developers:

If you'd like to extend the plugin to suit your needs, here are some functions and classes that you can use:

- **Post Sending Hook:**

```php
add_action('publish_post', 'TelegramApi::send_post_to_telegram_channel', 10, 2);
```

- **Configurable Classes:**
  - `TelegramApi` for sending messages.
  - `TelegramApiSettings` for managing settings.
  - `TelegramApiResponseHandler` for displaying success or error messages.

- **Example Filter for Customization:**

```php
add_filter('telegram_message_content', function($message) {
    return strtoupper($message); // Changes message text to uppercase
});
```

---

#### 🐞 Found a Bug or Issue?

Please report it via the GitHub issues section. We would love your help. ❤️

---

#### 🎉 See Results:

Want to see an example of how this plugin works? Visit this Telegram channel to check it out:  
👉 [💵 Daily Dollar Channel (wp_dollar_daily)](https://t.me/wp_post)

Check it out and enjoy using this awesome plugin! 😎

---

#### 📜 License:

This plugin is released under the GPL v2 (or later) license. You are free to use, modify, and share it. 🌟

---

#### 🙌 Acknowledgments:

- Thanks to Telegram for their powerful API. 📡
- Thanks to the WordPress community for providing us with the best site-building tools. 🌍

If you liked this plugin, don’t forget to give it a star! ⭐

---

I’ve also generated a creative image representation for your plugin, which might be useful for your README or promotional materials. Let me know if you'd like to see or modify it.
