import java.nio.charset.StandardCharsets;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

public class ClassLoaderInput {


	public static boolean checkShadow(String shadow) {
		String salt = "JolieTuAsDécompilé!";
		String tmp = Password.EtNon();
		for(int i = 0; i < tmp.length()*3; i++) {
			if(i == tmp.length()-3) {
				String val = cyclicLeftShift(tmp, i);
				salt += val.charAt(0)+""+val.charAt(1);
				tmp = Password.PasSur();	
				for(int j = 0; j < tmp.length()*6; j++) {
					int offset = 7;
					if(j == tmp.length() - offset) {
						salt+=" "+ shiftRight(cyclicLeftShift(tmp, j), offset-1);
						tmp = Password.Demande();	
						for(int k = 0; k < tmp.length()*4; k++) {
							offset = 4;
							if(k == tmp.length() - offset) {
								salt+=" "+ shiftRight(cyclicLeftShift(tmp, k), offset);
								tmp = Password.AlaVoisine();	
								for(int l = 0; l < tmp.length()*8; l++) {
									offset = 11;
									if(l == tmp.length() - offset) {
										salt+=" "+ shiftRight(cyclicLeftShift(tmp, l), offset);
										break;
									}
								}
								break;
							}
						}
						break;
					}
				}
				break;
			}
		}
		
		try {
			byte[] h1 = encode(shake(salt));
			byte[] h2 = encode(shadow);
			if(h1.length != h2.length) {
				return false;
			}
			for(int i=0; i< h1.length; i++) {
				if(h1[i] != h2[i]) {
					return false;
				}
			}
		} catch (NoSuchAlgorithmException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		return true;
	}


	public static String cyclicLeftShift(String s, int k){
		k = k%s.length();
		return s.substring(k) + s.substring(0, k);
	}

	public static String shiftRight(String s, int k) {
		StringBuilder b = new StringBuilder();
		for(int i=0; i<k;i++) {
			b.append(s.charAt(i));
		}
		return b.toString();
	}

	public static String shake(String s) {
		String tmp = s;
		for(int i=s.length()-1; i>0; i--) {
			tmp = sc(s,ffib(i), ffib(s.length()-i));
		}
		return tmp;
	}
	
	public static byte[] encode(String s) throws NoSuchAlgorithmException {
		MessageDigest digest = MessageDigest.getInstance("SHA-256");
		return digest.digest(s.getBytes(StandardCharsets.UTF_8));
	}

	public static int fib(int n) {
		if (n < 2) 
			return(n);
		return fib(n-2) + fib(n-1) ;
	}
	
	public static int ffib(int n) {
		int i=0;
		int tmp = 0;
		int fibo = 0;
		while(tmp < n) {
			fibo = tmp;
			tmp = fib(i);
			i++;
		}
		return fibo;
	}
	
	public static String sc(String s, int n, int n1) {
		StringBuilder newS = new StringBuilder();
		int tmp = s.charAt(n);
		for(int i=0; i< s.length(); i++) {
			if(i == n) {
				newS.append((int)s.charAt(n1));
			}else if(i == n1){
				newS.append(tmp);
			}else {
				if(i%3 == 0) {
					newS.append((int)s.charAt(i));
				}else {
					newS.append(s.charAt(i));
				}
			}
		}
		return newS.toString();
		}

}

